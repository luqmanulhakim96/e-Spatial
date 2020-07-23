<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\Document;
use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;

use App\SenaraiEmail;
use App\Events\NewNotification;

use App\Notifications\Admin\PermohonanBaruAdmin;
use App\Notifications\Admin\PermohonanBaruAdminNull;
use App\Notifications\User\PermohonanBaruUser;

use Auth;



class UserController extends Controller
{
  public function index()
  {
    $nama = User::find(1);
    $list = SenaraiHarga::where('status','Aktif')
              ->distinct()
              ->get();

    // dd($nama);
      return view('user.mainMenu', compact('nama', 'list'));
  }

    /**
   * Send the password reset notification.
   *
   * @param  string  $token
   * @return void
   */
  public function sendPasswordResetNotification($token)
  {
      $this->notify(new ResetPasswordNotification($token));
  }

  public function getSenaraiHargaIdByTahun($jenisDokumen, $jenisData, $tahun, $negeri){
    $senaraiHargaId = 'TAK MASUK';
    $senaraiHargaId = SenaraiHarga::select('id')
                      ->where('jenis_dokumen',$jenisDokumen)
                      ->where('jenis_data',$jenisData)
                      ->where('tahun',$tahun)
                      ->where('negeri',$negeri)
                      ->get();
    return json_encode($senaraiHargaId);
    exit;
  }

  public function getSenaraiHargaIdByKategoriData($jenisDokumen, $jenisData, $kategoriData, $negeri){
    $senaraiHargaId = 'TAK MASUK2';
    $senaraiHargaId = SenaraiHarga::select('id')
                      ->where('jenis_dokumen',$jenisDokumen)
                      ->where('jenis_data',$jenisData)
                      ->where('kategori_data',$kategoriData)
                      ->where('negeri',$negeri)
                      ->get();
    return json_encode($senaraiHargaId);
    exit;
  }

  public function list(){
    $user_id = Auth::user()->id;
    $list = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Sedang Diproses')
              ->get();

    $list_lulus = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Lulus')
              ->get();

    $list_gagal = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Gagal')
              ->get();

    return view('user.list', compact('list','list_lulus','list_gagal'));
  }

  public function add(){
    $jenisDokumen = SenaraiHarga::select('jenis_dokumen')->distinct()->get();

    //dd($jenisData);
    return view('user.add', compact('jenisDokumen'));
  }

  public function getJenisData($jenisDokumen){
    // Fetch Users by Departmentid
      $jenisData = SenaraiHarga::select('jenis_data')
              			->where('jenis_dokumen',$jenisDokumen)
                    ->distinct()
              			->get();
      echo json_encode($jenisData);
      exit;
  }

  public function getTahun($jenisData, $jenisDokumen){
    $tahun = SenaraiHarga::select('tahun')
              ->where('jenis_data', $jenisData)
              ->where('jenis_dokumen', $jenisDokumen)
              ->distinct()
              ->get();
    echo json_encode($tahun);
    exit;
  }

  public function getKategoriData($jenisData,$jenisDokumen){
    $kategoriData = SenaraiHarga::select('kategori_data')
                      ->where('jenis_data', $jenisData)
                      ->where('jenis_dokumen', $jenisDokumen)
                      ->distinct()
                      ->get();
    echo json_encode($kategoriData);
    exit;
  }

  public function getNegeriFromTahun($jenisData,$jenisDokumen,$tahun){
    $negeri = SenaraiHarga::select('negeri')
                ->where('jenis_data', $jenisData)
                ->where('jenis_dokumen', $jenisDokumen)
                ->where('tahun', $tahun)
                ->distinct()
                ->get();
    echo json_encode($negeri);
    exit;
  }

  public function getNegeriFromKategoriData($jenisData,$jenisDokumen,$kategoriData){
    $negeri = SenaraiHarga::select('negeri')
                ->where('jenis_data', $jenisData)
                ->where('jenis_dokumen', $jenisDokumen)
                ->where('kategori_data', $kategoriData)
                ->distinct()
                ->get();
    echo json_encode($negeri);
    exit;
  }

  public function getJenisKertasFromTahun($jenisData,$jenisDokumen,$tahun,$negeri){
    $jenisKertas = SenaraiHarga::select('jenis_kertas')
                ->where('jenis_data', $jenisData)
                ->where('jenis_dokumen', $jenisDokumen)
                ->where('tahun', $tahun)
                ->where('negeri', $negeri)
                ->distinct()
                ->get();
    echo json_encode($jenisKertas);
    exit;
  }

public function getJenisKertasFromKategoriData($jenisData,$jenisDokumen,$kategoriData,$negeri){
    $jenisKertas = SenaraiHarga::select('jenis_kertas')
                ->where('jenis_data', $jenisData)
                ->where('jenis_dokumen', $jenisDokumen)
                ->where('kategori_data', $kategoriData)
                ->where('negeri', $negeri)
                ->distinct()
                ->get();
    echo json_encode($jenisKertas);
    exit;
  }




  public function create(array $data, $uploaded_files_permohonan, $uploaded_file_aoi){
    $user_id = Auth::user()->id;

    $user = User::findOrFail($user_id);

    $status_permohonan = $data['status_permohonan'];
    $status_pembayaran = $data['status_pembayaran'];


    //user dalaman permohonan akan terus lulus

    if($user->kategori == 'dalaman'){
      $status_permohonan = 'Lulus';
      $status_pembayaran = 'Sudah Dibayar';
    }

    return Permohonan::Create([
      'attachment_aoi' => $uploaded_file_aoi,
      'attachment_permohonan' => $uploaded_files_permohonan,
      'dokumen_ke_luar_negara' => $data['dokumen_ke_luar_negara'],
      'maklumat_agensi_dan_negara' => $data['maklumat_agensi_dan_negara'],
      'status_permohonan' => $status_permohonan,
      'status_pembayaran' => $status_pembayaran,
      'user_id' => $user_id,
      'jumlah_bayaran'=> 0.00
      ]);
  }

  public function createData(array $data, $permohonan_id){

    $permohonan_id = $permohonan_id->id;
    // dd($data['data']);
    foreach ($data['data'] as $value) {
      //d( $value);
      $submit = DataPermohonan::Create([
        'senarai_harga_id' => $value,
        'permohonan_id' => $permohonan_id
      ]);

    }
    return $submit;
  }


  protected function validator(array $data)
  {
      return Validator::make($data, [
          'attachment_aoi' => ['nullable'],
          'attachment_permohonan' => ['nullable'],
          'dokumen_ke_luar_negara' => ['required'],
      ]);
  }

  public function submitForm(Request $request){
    // dd($request->all());
    $user_id = Auth::user()->id;
    $filename_aoi = null;
    $filename_kepujian = null;
    $this->validator($request->all())->validate();

    //dd($files = $request->file('attachment_permohonan') != null);
    $uploaded_files_permohonan = "";
    $uploaded_file_aoi = "";
    if ($files = $request->file('attachment_aoi') != null) {
          $uploaded_file_aoi = $request->file('attachment_aoi')->store('uploads/attachment_aoi');
          // dd($uploaded_file_aoi);
           // $destinationPath = 'public/file/attachment_aoi'; // upload path
           // $filename_aoi = "attachment_aoi_" . $user_id . "." . $files->getClientOriginalExtension();
           // $files->move($destinationPath, $filename_aoi);
           // $insert['file'] = "$filename_aoi";

    }else {
      $uploaded_file_aoi = null;
    }

    if ($files = $request->file('attachment_permohonan') != null) {
           // $destinationPath = 'public/file/attachment_permohonan'; // upload path
           // $filename_aoi = "attachment_aoi_" . $user_id . "." . $files->getClientOriginalExtension();
           // $files->move($destinationPath, $filename_aoi);
           // $insert['file'] = "$filename_aoi";
           $uploaded_files_permohonan =  $request->file('attachment_permohonan')->store('uploads/attachment_aoi');
    }else {
      $uploaded_files_permohonan = null;
    }


    //store data in permohonan table
    event($permohonanBaru = $this->create($request->all(), $uploaded_files_permohonan, $uploaded_file_aoi));
    //call permohonan id

    $user_id = Auth::user()->id;
    //dd($request);

    // hantar notification permohonan ke admin

    event($permohonanDataBaru = $this->createData($request->all(), $permohonanBaru));
    // dd($permohonanBaru);
    $email = SenaraiEmail::where('kepada', '=', 'admin')->where('jenis', '=', 'memo')->first();
    // dd($email);
    $admins = User::where('role', '=' , '0',)
                ->get();
    // dd($admin);
    if(is_null($email))
    {
      foreach ($admins as $admin) {
        $permohonanBaru->notify(new PermohonanBaruAdminNull($admin, $email));
      }
    }
    else{
      foreach ($admins as $admin) {
        $permohonanBaru->notify(new PermohonanBaruAdmin($admin, $email));
      }
    }


    $permohonanBaru->notify(new PermohonanBaruUser(Auth::user()));


    return redirect()->route('user.list')->with('success','Permohonan anda berjaya membuat permohonan data.');
  }

  public function edit($id){
    $info = Permohonan::findOrFail($id);
    $dataPilihan = DataPermohonan::where('permohonan_id', $id)->get();
    $jumlahdata = DataPermohonan::where('permohonan_id', $id)->count();
    $jenisDokumen = SenaraiHarga::select('jenis_dokumen')->distinct()->get();


    $senaraiHarga = null;

    for($i = 0; $i < $jumlahdata; $i++){
      $senaraiHarga[$i] = SenaraiHarga::where('id',$dataPilihan[$i]->senarai_harga_id)->get();
    }
    //$senaraiHarga = SenaraiHarga::get();
    // dd($senaraiHarga[0][0]);
    // $i=0;
    // foreach ($senaraiHarga[1] as $data) {
    //   dd($data);
    //   $i++;
    // }
    //dd($data);
    return view('user.edit', compact('info','dataPilihan','jenisDokumen','jumlahdata','senaraiHarga'));
  }

  public function update($id){

    $permohonan = Permohonan::find($id);

    $permohonan->jenis_dokumen = request()->jenis_dokumen;
    $permohonan->jenis_data = request()->jenis_data;
    $permohonan->negeri = request()->negeri;
    $permohonan->tahun = request()->tahun;
    $permohonan->attachment_permohonan = request()->attachment_permohonan;
    $permohonan->dokumen_ke_luar_negara = request()->dokumen_ke_luar_negara;

    $permohonan->save();
  }

  public function updatePermohonan($id, Request $request){
    //$this->validator(request()->all())->validate();
    //dd(request()->all());

    $deleteData = DataPermohonan::where('permohonan_id',$id)->delete();

    foreach ($request['data'] as $value) {
      //d( $value);
      $submit = DataPermohonan::Create([
        'senarai_harga_id' => $value,
        'permohonan_id' => $id
      ]);

    }
    return redirect()->route('user.list')->with('success','Permohonan anda telah berjaya dikemaskini.');;
  }

  public function editProfil(){
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    return view('user.profil.edit',compact('user'));
  }

  public function updateProfil(Request $request){

    $this->validatorProfile($request->all())->validate();
    //dd($request->all());



    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    $user->alamat_kediaman = $request->alamat_kediaman;
    $user->no_tel_rumah = $request->no_tel_rumah;
    $user->no_tel_bimbit = $request->no_tel_rumah;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('user.mainMenu')->with('success','Profil anda telah dikemaskini');
    //return view('user.profil.edit');
  }

  protected function validatorProfile(array $data)
  {
      return Validator::make($data, [
          'alamat_kediaman' => ['required','string', 'max:255'],
          'no_tel_rumah' => ['required', 'string', 'max:12','min:10'],
          'no_tel_bimbit' => ['required', 'string', 'max:12','min:10'],
          'email' => ['required', 'string', 'email', 'max:255'],
      ]);
  }

  public function uploadResitPembayaran(Request $request){
    //dd($request->all());
    $uploaded_files_permohonan =  $request->file('attachment_receipt_pembayaran')->store('uploads/attachment_resceipt_pembayaran');
    $permohonan = Permohonan::findOrFail($request->permohonan_id_resit);
    $permohonan->attachment_receipt_pembayaran = $uploaded_files_permohonan;
    $permohonan->save();

    return redirect()->route('user.list')->with('success','Resit Pembayaran telah berjaya dimuatnaik');
  }

  public function uploadPenerimaanData(Request $request){
    $uploaded_files_permohonan =  $request->file('attachment_surat_penerimaan_data')->store('uploads/attachment_surat_penerimaan_data_user');
    $permohonan = Permohonan::findOrFail($request->permohonan_id_surat);
    $permohonan->attachment_penerimaan_data_user = $uploaded_files_permohonan;
    $permohonan->save();

    return redirect()->route('user.list')->with('success','Surat Penerimaan Data anda telah berjaya dimuatnaik');
  }

}

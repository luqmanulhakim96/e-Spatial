<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\Document;
use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;
use App\Pengumuman;


use Storage;


use App\SenaraiEmail;
use App\Events\NewNotification;

use App\Notifications\Admin\PermohonanBaruAdmin;
use App\Notifications\Admin\PermohonanBaruAdminNull;
use App\Notifications\Admin\PermohonanBatalAdmin;
use App\Notifications\Admin\PermohonanMuatNaikResitAdmin;

use App\Notifications\User\PermohonanBaruUser;

use Illuminate\Support\Facades\Hash;


use Auth;



class UserController extends Controller
{
  public function index()
  {
    $user_id = Auth::user()->id;
    $nama = User::find(1);
    $list = SenaraiHarga::where('status','Aktif')
              ->distinct()
              ->get();

    //dashboard counter

    $countPermohonanSedangProses = Permohonan::where('user_id', $user_id)
                                ->where('status_permohonan', 'Sedang Diproses')
                                ->count();

    $countPermohonanLulus = Permohonan::where('user_id', $user_id)
                                ->where('status_permohonan', 'Lulus')
                                ->whereNotNull('attachment_surat_bayaran')
                                ->count();

    $countPermohonanGagal = Permohonan::where('user_id', $user_id)
                                ->where('status_permohonan', 'Gagal')
                                ->count();

    $countPermohonanTidakBerkaitan = Permohonan::where('user_id', $user_id)
                                ->where('status_permohonan', 'Tidak Berkaitan')
                                ->count();

    $countPermohonanBatal = Permohonan::where('user_id', $user_id)
                                ->where('status_permohonan', 'Batal')
                                ->count();

    $countPermohonanKeseluruhan = Permohonan::where('user_id', $user_id)
                                ->count();

    $pengumuman = Pengumuman::where('status','1')->orderBy('created_at', 'DESC')->get();


      return view('user.mainMenu', compact('list','countPermohonanSedangProses', 'countPermohonanLulus', 'countPermohonanGagal','countPermohonanKeseluruhan','pengumuman', 'countPermohonanTidakBerkaitan','countPermohonanBatal'));
  }

  public function changePassUser(){
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    return view('user.profil.changePass',compact('user'));
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

  public function getSenaraiHargaIdByTahun($jenisDokumen, $jenisData, $tahun, $negeri, $jenisKertas){

    if($jenisKertas == 'tiada'){
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('tahun',$tahun)
                        ->where('negeri',$negeri)
                        ->get();
    }else {
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('tahun',$tahun)
                        ->where('negeri',$negeri)
                        ->where('jenis_Kertas',$jenisKertas)
                        ->get();
    }
    return json_encode($senaraiHargaId);
    exit;
  }

  public function getSenaraiHargaIdByKategoriData($jenisDokumen, $jenisData, $kategoriData, $negeri, $jenisKertas){

    if($jenisKertas == 'tiada'){
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('kategori_data',$kategoriData)
                        ->where('negeri',$negeri)
                        ->get();
    }else {
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('kategori_data',$kategoriData)
                        ->where('negeri',$negeri)
                        ->where('jenis_Kertas',$jenisKertas)
                        ->get();
    }
    return json_encode($senaraiHargaId);
    exit;
  }

  public function getSenaraiHargaIdCustom($jenisDokumen, $jenisData, $jenisKertas, $negeri){

    if($jenisKertas == 'tiada'){
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('negeri',$negeri)
                        ->get();
    }else {
      $senaraiHargaId = SenaraiHarga::select('id')
                        ->where('jenis_dokumen',$jenisDokumen)
                        ->where('jenis_data',$jenisData)
                        ->where('negeri',$negeri)
                        ->where('jenis_Kertas',$jenisKertas)
                        ->get();
    }
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
              ->whereNotNull('attachment_surat_bayaran')
              ->get();

    // dd($list_lulus);

    $list_gagal = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Gagal')
              ->get();

    return view('user.list', compact('list','list_lulus','list_gagal'));
  }

  public function viewListSedangDiproses(){
    $user_id = Auth::user()->id;

    $listSedangDiproses = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Sedang Diproses')
              ->get();

    return view('user.listSedangDiproses', compact('listSedangDiproses'));
  }

  public function viewListGagal(){
    $user_id = Auth::user()->id;

    $list_gagal = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Gagal')
              ->whereNotNull('remarks_admin')
              ->get();

    return view('user.listGagal', compact('list_gagal'));
  }

  public function viewListTidakBerkaitan(){
    $user_id = Auth::user()->id;

    $list_tidak_berkaitan = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Tidak Berkaitan')
              ->get();

    return view('user.listTidakBerkaitan', compact('list_tidak_berkaitan'));
  }

  public function viewListBatal(){
    $user_id = Auth::user()->id;

    $list_batal = Permohonan::where('user_id','=',$user_id)
              ->where('status_permohonan','Batal')
              ->get();

    return view('user.listBatal', compact('list_batal'));
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

  public function getCustomNegeri($jenisData,$jenisDokumen){
    $negeri = SenaraiHarga::select('negeri')
                ->where('jenis_data', $jenisData)
                ->where('jenis_dokumen', $jenisDokumen)
                ->distinct()
                ->get();
    echo json_encode($negeri);
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

    public function getCustomJenisKertas($jenisData,$jenisDokumen,$negeri){
        $jenisKertas = SenaraiHarga::select('jenis_kertas')
                     ->where('jenis_data', $jenisData)
                     ->where('jenis_dokumen', $jenisDokumen)
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
    //dd($data);
    $permohonan_id = $permohonan_id->id;
    // dd($data);
    $counter_data_permohonan = $data['counter_data'];

    foreach ($data['data'] as $key => $value) {
      $submit = DataPermohonan::Create([
        'senarai_harga_id' => $data['data'][$key],
        'permohonan_id' => $permohonan_id,
        'custom_jenis_data' => $data['data_jenis_data'][$key],
        'custom_tahun' => $data['data_tahun'][$key],
      ]);
    }

    // for($i = 0; $i < $counter_data_permohonan; $i++){
    //   $submit = DataPermohonan::Create([
    //     'senarai_harga_id' => $data['data'][$i],
    //     'permohonan_id' => $permohonan_id,
    //     'custom_jenis_data' => $data['data_jenis_data'][$i],
    //     'custom_tahun' => $data['data_tahun'][$i],
    //   ]);
    // }

    return $submit;
  }


  protected function validator(array $data)
  {
      return Validator::make($data, [
          'attachment_aoi' => ['nullable','max:100000'],
          'attachment_permohonan' => ['required','max:100000'],
          'dokumen_ke_luar_negara' => ['required'],
          'maklumat_agensi_dan_negara' => ['nullable','string']
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
    $email = SenaraiEmail::where('kepada', '=', 'admin')->where('jenis', '=', 'permohonan_baru')->first();
    // dd($email);
    $admins = User::where('role', '=' , '0')
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

    $emailUser = SenaraiEmail::where('kepada', '=', 'pemohon')->where('jenis', '=', 'permohonan_baru')->first();

    $permohonanBaru->notify(new PermohonanBaruUser(Auth::user(),$emailUser));

    if($request->language == "english"){
      return redirect()->route('user.listSedangDiproses_eng')->with('success','You have successfully made a data request.');
    }else {
      return redirect()->route('user.listSedangDiproses')->with('success','Anda berjaya membuat permohonan data.');
    }
  }

  public function edit($id){
    $info = Permohonan::findOrFail($id);
    $dataPilihan = DataPermohonan::where('permohonan_id', $id)->get();
    $jumlahdata = DataPermohonan::where('permohonan_id', $id)->count();
    $jenisDokumen = SenaraiHarga::select('jenis_dokumen')->distinct()->get();
    //dd($dataPilihan);

    $senaraiHarga = null;

    for($i = 0; $i < $jumlahdata; $i++){
      $senaraiHarga[$i] = SenaraiHarga::where('id',$dataPilihan[$i]->senarai_harga_id)->get();
    }
    //dd($dataPilihan);


    //$senaraiHarga = SenaraiHarga::get();
    //dd($senaraiHarga[0][0]);
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

  public function batal($id){

    $status = "Batal";

    $permohonan = Permohonan::find($id);

    $permohonan->status_permohonan = $status;

    $permohonan->save();

    $admin = User::where('role','=','0')->get();
    $email = SenaraiEmail::where('kepada', '=', 'admin')->where('jenis', '=', 'permohonan_batal')->first();

    foreach ($admin as $data) {
      $permohonan->notify(new PermohonanBatalAdmin($data,$email));
    }

    return redirect()->route('user.listSedangDiproses')->with('success','Permohonan anda telah dibatalkan');
  }

  public function updatePermohonan($id, Request $request){
    //$this->validator()->validate();
    $counter_data_permohonan = request()->counter_data;
    //dd($request->all());

    $deleteData = DataPermohonan::where('permohonan_id',$id)->delete();
      //dd($request->all());

     foreach ($request['data'] as $value) {
       $harga_id[] = $value;
     }

     foreach ($request['data_jenis_data'] as $value) {
       $jenis_data[] = $value;
     }

     foreach ($request['data_tahun'] as $value) {
       $tahun[] = $value;
     }

     // dd($harga_id[0]);
     for($i = 0; $i < $counter_data_permohonan; $i++){

       $harga_id_single = $harga_id[$i];
       $jenis_data_single = $jenis_data[$i];
       $tahun_single = $tahun[$i];

      $submit = DataPermohonan::Create([
        'senarai_harga_id' => $harga_id_single,
        'permohonan_id' => $id,
        'custom_jenis_data' => $jenis_data_single,
        'custom_tahun' => $tahun_single,
      ]);
    }
    if($request->language == "english"){
      return redirect()->route('user.listSedangDiproses_eng')->with('success','Your application data has been successfully updated.');
    }else {
      return redirect()->route('user.listSedangDiproses')->with('success','Data permohonan anda telah berjaya dikemaskini.');
    }
  }

  public function editProfil(){
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    return view('user.profil.edit',compact('user'));
  }

  protected function validatorProfile(array $data)
  {
      return Validator::make($data, [
          'kategori' => ['required'],
          'nama' => ['required', 'string', 'max:255'],
          'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8'],
          'kerakyatan' => ['required'],
          'tarikh_lahir' => ['required', 'date'],
          'tempat_lahir' => ['required', 'string', 'max:255'],
          'jawatan' => ['required', 'string', 'max:255'],
          'jenis_perniagaan' => ['required', 'string', 'max:255'],
          'alamat_kediaman' => ['required','string', 'max:255'],
          'poskod' => ['required','string', 'max:5', 'min:5'],
          'negeri' => ['required','string', 'max:255'],
          'nama_kementerian' => ['required','string', 'max:255'],
          'alamat_kementerian' => ['required','string', 'max:255'],
          'no_tel_rumah' => ['required', 'string', 'max:12'],
          'no_tel_bimbit' => ['required', 'string', 'max:12'],
          'email' => ['required', 'string', 'email', 'max:255']
          // 'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

  protected function validatorAwam(array $data)
  {
      return Validator::make($data, [
          'kategori' => ['required'],
          'nama' => ['required', 'string', 'max:255'],
          'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8'],
          'kerakyatan' => ['required'],
          'tarikh_lahir' => ['required', 'date'],
          'tempat_lahir' => ['required', 'string', 'max:255'],
          'jawatan' => ['required', 'string', 'max:255'],
          'jenis_perniagaan' => ['required', 'string', 'max:255'],
          'alamat_kediaman' => ['required','string', 'max:255'],
          'poskod' => ['required','string', 'max:5', 'min:5'],
          'negeri' => ['required','string', 'max:255'],
          'no_tel_rumah' => ['required', 'string', 'max:12'],
          'no_tel_bimbit' => ['required', 'string', 'max:12'],
          'email' => ['required', 'string', 'email', 'max:255']
          // 'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

  protected function validatorDalaman(array $data)
  {
      return Validator::make($data, [
          'kategori' => ['required'],
          'nama' => ['required', 'string', 'max:255'],
          'kad_pengenalan' => ['required', 'string', 'max:12','unique:users'],
          'kerakyatan' => ['required'],
          'tarikh_lahir' => ['required', 'date'],
          'tempat_lahir' => ['required', 'string', 'max:255'],
          'jawatan' => ['required', 'string', 'max:255'],
          'no_tel_rumah' => ['required', 'string', 'max:12'],
          'no_tel_bimbit' => ['required', 'string', 'max:12'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'bahagian' => ['required','string', 'max:255'],
          // 'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
  }

  public function updateProfil(Request $request){

    if($request->kerakyatan == 'Bukan Warganegara'){
      if($request->pasport != null){
        $request->merge([
          'kad_pengenalan' => $request->pasport,
        ]);

        $request->merge([
          'tarikh_lahir' => $request->tarikh_lahir_manual,
        ]);
      }
    }
    // dd($request->all());

    $gambar_profile = "";

    if ($files = $request->file('gambar_profile') != null) {
          $gambar_profile = $request->file('gambar_profile')->store('public/uploads/gambar_profile');
    }else {
      $gambar_profile = null;
    }


    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    if($request->kategori == 'dalaman'){

      $this->validatorDalaman($request->all())->validate();

      $user->name = $request->nama;
      $user->kerakyatan = $request->kerakyatan;
      $user->kad_pengenalan = $request->kad_pengenalan;
      $user->tarikh_lahir = $request->tarikh_lahir;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->jawatan = $request->jawatan;
      $user->bahagian = $request->bahagian;
      $user->no_tel_rumah = $request->no_tel_rumah;
      $user->no_tel_bimbit = $request->no_tel_bimbit;
      $user->email = $request->email;
      if($gambar_profile != null){
        $user->gambar_profile = $gambar_profile;
      }

      $user->save();

    }elseif ($request->kategori == 'awam') {

      $this->validatorAwam($request->all())->validate();

      $user->name = $request->nama;
      $user->kerakyatan = $request->kerakyatan;
      $user->kad_pengenalan = $request->kad_pengenalan;
      $user->tarikh_lahir = $request->tarikh_lahir;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->jawatan = $request->jawatan;
      $user->jenis_perniagaan = $request->jenis_perniagaan;
      $user->alamat_kediaman = $request->alamat_kediaman;
      $user->poskod = $request->poskod;
      $user->negeri = $request->negeri;
      $user->no_tel_rumah = $request->no_tel_rumah;
      $user->no_tel_bimbit = $request->no_tel_bimbit;
      $user->email = $request->email;
      if($gambar_profile != null){
        $user->gambar_profile = $gambar_profile;
      }


      $user->save();

    }else {

      $this->validatorProfile($request->all())->validate();

      $user->name = $request->nama;
      $user->kerakyatan = $request->kerakyatan;
      $user->kad_pengenalan = $request->kad_pengenalan;
      $user->tarikh_lahir = $request->tarikh_lahir;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->jawatan = $request->jawatan;
      $user->jenis_perniagaan = $request->jenis_perniagaan;
      $user->alamat_kediaman = $request->alamat_kediaman;
      $user->poskod = $request->poskod;
      $user->negeri = $request->negeri;
      $user->nama_kementerian = $request->nama_kementerian;
      $user->alamat_kementerian = $request->alamat_kementerian;
      $user->no_tel_rumah = $request->no_tel_rumah;
      $user->no_tel_bimbit = $request->no_tel_bimbit;
      $user->email = $request->email;
      if($gambar_profile != null){
        $user->gambar_profile = $gambar_profile;
      }


      $user->save();

    }

    if($request->language == "english"){
      return redirect()->route('user.profil.edit_eng')->with('success','Your profile has been updated');
    }else {
      return redirect()->route('user.profil.edit')->with('success','Profil anda telah dikemaskini');
    }
    //return view('user.profil.edit');
  }

  public function uploadResitPembayaran(Request $request){
    //dd($request->all());
    $uploaded_files_permohonan =  $request->file('attachment_receipt_pembayaran')->store('uploads/attachment_resceipt_pembayaran');
    $permohonan = Permohonan::findOrFail($request->permohonan_id_resit);
    $permohonan->attachment_receipt_pembayaran = $uploaded_files_permohonan;
    $permohonan->save();

    $email = SenaraiEmail::where('kepada', '=', 'admin')->where('jenis', '=', 'pemohon_muatnaik_resit_pembayaran')->first();

    $admins = User::where('role', '=' , '0')->get();

    foreach ($admins as $data) {
      $permohonan->notify(new PermohonanMuatNaikResitAdmin($data, $email));
    }
    if($request->language == "english"){
      return redirect()->route('user.list_eng')->with('success','Payment receipt was successfully uploaded');

    }else {
      return redirect()->route('user.list')->with('success','Resit Pembayaran telah berjaya dimuatnaik');

    }
  }

  public function uploadPenerimaanData(Request $request){
    $uploaded_files_permohonan =  $request->file('attachment_surat_penerimaan_data')->store('uploads/attachment_surat_penerimaan_data_user');
    $permohonan = Permohonan::findOrFail($request->permohonan_id_surat);
    $permohonan->attachment_penerimaan_data_user = $uploaded_files_permohonan;
    $permohonan->save();

    if ($request->language == "english") {
      return redirect()->route('user.list_eng')->with('success','Data Acceptance Form was successfully uploaded');
    }else {
      return redirect()->route('user.list')->with('success','Borang Akuan Penerimaan Data anda telah berjaya dimuatnaik');
    }
  }

  public function updatePass(Request $request){
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    if(!(Hash::check($request->get('old_pass'), Auth::user()->password))){
      return redirect()->back()->with("error","Kata laluan terdahulu tidak sama");
    }

    if(strcmp($request->get('old_pass'),$request->get('new_pass'))== 0){
      return redirect()->back()->with("error","Kata laluan terdahulu tidak boleh sama dengan kata laluan sekarang");
      //dd('password lama sama dgn pass baru');
    }

    if(strcmp($request->get('new_pass_confirm'),$request->get('new_pass'))== 1){
      return redirect()->back()->with("error","Kata laluan baru tidak sama");
      //dd('password baru tak sama');
    }

    $validatedData = $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|string|min:6',
      ]);

      $hashed_random_password = Hash::make($request->get('new_pass'));

      $user->password = $hashed_random_password;

      $user->save();

      if($request->language == "english"){
        return redirect()->route('user.mainMenu_eng')->with("success","Password has been changed");
      }else {
        return redirect()->route('user.mainMenu')->with("success","Kata laluan telah ditukar");
      }
  }

  public function downloadSuratBayaran($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_surat_bayaran);
  }

  public function downloadSuratPenerimaanData($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_penerimaan_data);
  }

  public function downloadSuratTidakLulus($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->remarks_admin);
  }
}

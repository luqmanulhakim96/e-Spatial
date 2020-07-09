<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;

use Auth;



class UserController extends Controller
{
  public function index()
  {
    $nama = User::find(1);
    $list = SenaraiHarga::get();
    // dd($nama);
      return view('user.mainMenu', compact('nama', 'list'));
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
    $list = Permohonan::where('user_id','=',$user_id)->get();

    return view('user.list', compact('list'));
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

  public function getTahun($jenisData){
    $tahun = SenaraiHarga::select('tahun')
              ->where('jenis_data', $jenisData)
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


  public function create(array $data){
    $user_id = Auth::user()->id;
    //dd($data);


    return Permohonan::Create([
      'attachment_permohonan' => $data['attachment_permohonan'],
      'dokumen_ke_luar_negara' => $data['dokumen_ke_luar_negara'],
      'maklumat_agensi_dan_negara' => $data['maklumat_agensi_dan_negara'],
      'status_permohonan' => $data['status_permohonan'],
      'status_pembayaran' => $data['status_pembayaran'],
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
          'dokumen_ke_luar_negara' => ['required'],
      ]);
  }

  public function submitForm(Request $request){
    //dd($request);
    $this->validator($request->all())->validate();

    //dd($request->kategori_data);

    //store data in permohonan table
    event($permohonanBaru = $this->create($request->all()));
    //call permohonan id
    $user_id = Auth::user()->id;
    //dd($request);


    event($permohonanDataBaru = $this->createData($request->all(), $permohonanBaru));
    //dd($permohonanDataBaru);


    return redirect()->route('user.list');
  }

  public function edit($id){
    $info = Permohonan::findOrFail($id);

    return view('user.edit', compact('info'));
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

  public function updatePermohonan($id){
    $this->validator(request()->all())->validate();

    $this->update($id);
    return redirect()->route('user.list');
  }

}

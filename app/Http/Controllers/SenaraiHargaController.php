<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use DB;

use App\SenaraiHarga;

class SenaraiHargaController extends Controller
{
  public function tambahHarga(){
      return view('senarai-harga.add');
  }

  public function editHarga($id){
    //$info = SenaraiHarga::find(1);
    $info = SenaraiHarga::findOrFail($id);
    //dd($info);

    return view('senarai-harga.edit', compact('info'));
  }

  public function createHarga(array $data){

    //pengiraan jumlah harga
    if($data['saiz_data'] != NULL){
      $jumlah_harga = $data['saiz_data'] * $data['harga_asas'];
    }else{
      $jumlah_harga = 1 * $data['harga_asas'];
    }

    $kategori_data_exist = isset($data['kategori_data']);
    if(!$kategori_data_exist){
      $kategori_data_exist = null;
    }else {
      $kategori_data_exist = $data['kategori_data'];
    }
    // dd($kategori_data_exist);
    return SenaraiHarga::create([
      'jenis_dokumen' => $data['jenis_dokumen'],
      'jenis_data' => $data['jenis_data'],
      'saiz_data' => $data['saiz_data'],
      'negeri' => $data['negeri'],
      'tahun' => $data['tahun'],
      'harga_asas' => $data['harga_asas'],
      'jumlah_harga' => $jumlah_harga,
      'kategori_data' => $kategori_data_exist
    ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'jenis_dokumen' => ['required'],
          'jenis_data' => ['required'],
          'saiz_data' => ['nullable', 'numeric'],
          'tahun' => ['nullable', 'numeric', 'digits:4'],
          'negeri' => ['required'],
          'harga_asas' => ['required', 'numeric'],
          'kategori_data' => ['nullable']
      ]);
  }

  public function insertHarga(Request $request){
    $this->validator($request->all())->validate();

    event($senaraiHarga = $this->createHarga($request->all()));

    return redirect()->route('senarai-harga.list');
  }

  public function update($id){
    //initialize
    $tahun = request()->tahun;
    $kategori_data = request()->kategori_data;

    if(request()->saiz_data != NULL){
      $jumlah_harga = request()->saiz_data * request()->harga_asas;
    }else{
      $jumlah_harga = 1 * request()->harga_asas;
    }


    if(request()->jenis_dokumen == 'Bercetak'){
      $saiz_data = null;
    }else {
      $saiz_data = request()->saiz_data;
    }

    if(request()->jenis_data == 'Petak Kajian'){
      $tahun = null;
    }elseif (request()->jenis_data != 'Petak Kajian') {
      $kategori_data = null;
    }

    $senaraiHarga = SenaraiHarga::find($id);
    $senaraiHarga->jenis_dokumen = request()->jenis_dokumen;
    $senaraiHarga->saiz_data = $saiz_data;
    $senaraiHarga->jenis_data = request()->jenis_data;
    $senaraiHarga->tahun = $tahun;
    $senaraiHarga->kategori_data = $kategori_data;
    $senaraiHarga->negeri = request()->negeri;
    $senaraiHarga->harga_asas = request()->harga_asas;
    $senaraiHarga->jumlah_harga = $jumlah_harga;
    $senaraiHarga->save();
  }

  public function updateHarga($id){

    $this->validator(request()->all())->validate();


    $this->update($id);
    return redirect()->route('senarai-harga.list');
  }

  public function deleteHarga($id){
      $senaraiHarga = SenaraiHarga::find($id);
      $senaraiHarga-> delete();
      return redirect()->route('senarai-harga.list');
  }
}

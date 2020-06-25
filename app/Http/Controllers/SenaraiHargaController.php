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
    return SenaraiHarga::create([
      'jenis_data' => $data['jenis_data'],
      'saiz_data' => $data['saiz_data'],
      'negeri' => $data['negeri'],
      'tahun' => $data['tahun'],
      'harga_asas' => $data['harga_asas'],
      'jumlah_harga' => $data['jumlah_harga'],
    ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'jenis_data' => ['required'],
          'saiz_data' => ['required', 'numeric'],
          'negeri' => ['required'],
          'tahun' => ['required', 'numeric',  'digits:4' ],
          'harga_asas' => ['required', 'numeric'],
          'jumlah_harga' => ['required', 'numeric'],
      ]);
  }

  public function insertHarga(Request $request){
    $this->validator($request->all())->validate();

    event($senaraiHarga = $this->createHarga($request->all()));

    return redirect()->route('senarai-harga.list');
  }

  public function update($id){
    $senaraiHarga = SenaraiHarga::find($id);
    $senaraiHarga->jenis_data = request()->jenis_data;
    $senaraiHarga->saiz_data = request()->saiz_data;
    $senaraiHarga->negeri = request()->negeri;
    $senaraiHarga->tahun = request()->tahun;
    $senaraiHarga->harga_asas = request()->harga_asas;
    $senaraiHarga->jumlah_harga = request()->jumlah_harga;
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

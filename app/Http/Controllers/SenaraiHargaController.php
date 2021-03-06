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
      $jumlah_harga = $data['harga_asas'];
    }

    //check weather input text exist or not
    $kategori_data_exist = isset($data['kategori_data']);
    if(!$kategori_data_exist){
      $kategori_data_exist = null;
    }else {
      $kategori_data_exist = $data['kategori_data'];
    }

    $jenis_kertas_exist = isset($data['jenis_kertas']);
    if(!$jenis_kertas_exist){
      $jenis_kertas_exist = null;
    }else {
      $jenis_kertas_exist = $data['jenis_kertas'];
    }
    //initialize status
    $status = 'Aktif';
    // dd($kategori_data_exist);
    return SenaraiHarga::create([
      'jenis_dokumen' => $data['jenis_dokumen'],
      'saiz_data' => $data['saiz_data'],
      'jenis_kertas' => $jenis_kertas_exist,
      'jenis_data' => $data['jenis_data'],
      'negeri' => $data['negeri'],
      'tahun' => $data['tahun'],
      'harga_asas' => $data['harga_asas'],
      'jumlah_harga' => $jumlah_harga,
      'kategori_data' => $kategori_data_exist,
      'status' => $status,
    ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'jenis_dokumen' => ['required'],
          'saiz_data' => ['nullable', 'numeric'],
          'jenis_kertas' => ['nullable'],
          'jenis_data' => ['required'],
          'tahun' => ['nullable'],
          'negeri' => ['required'],
          'harga_asas' => ['required', 'numeric'],
          'kategori_data' => ['nullable']
      ]);
  }

  public function insertHarga(Request $request){
    $this->validator($request->all())->validate();

    if($request->jenis_dokumen == "Vektor Shapefile"){
      if($request->jenis_data != "Petak Kajian"){
        $searchVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
                                    ->where('jenis_data' , $request->jenis_data)
                                    ->where('tahun' , $request->tahun)
                                    ->where('negeri' , $request->negeri)
                                    ->where('status' , "Aktif")
                                    ->count();
      }else {
        $searchVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
                                    ->where('jenis_data' , $request->jenis_data)
                                    ->where('kategori_data' , $request->kategori_data)
                                    ->where('negeri' , $request->negeri)
                                    ->where('status' , "Aktif")
                                    ->count();
      }

      if($searchVektor > 0){
        return redirect()->route('senarai-harga.add')->with('error','Data Geospatial ini telah didaftarkan. Sila kemaskini maklumat di Senarai Harga');
      }
    }else {
      if($request->jenis_data != "Petak Kajian"){
        $searchBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
                                    ->where('jenis_data' , $request->jenis_data)
                                    ->where('tahun' , $request->tahun)
                                    ->where('negeri' , $request->negeri)
                                    ->where('jenis_kertas' , $request->jenis_kertas)
                                    ->where('status' , "Aktif")
                                    ->count();
      }else {
        $searchBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
                                    ->where('jenis_data' , $request->jenis_data)
                                    ->where('kategori_data' , $request->kategori_data)
                                    ->where('negeri' , $request->negeri)
                                    ->where('jenis_kertas' , $request->jenis_kertas)
                                    ->where('status' , "Aktif")
                                    ->count();
      }

      if($searchBercetak > 0){
        return redirect()->route('senarai-harga.add')->with('error','Data Geospatial ini telah didaftarkan. Sila kemaskini maklumat di Senarai Harga');
      }

    }

    event($senaraiHarga = $this->createHarga($request->all()));
    //dd($request->all());
    return redirect()->route('senarai-harga.list')->with('success','Data baru telah ditambah');
  }

  public function update($id){
    //initialize
    $tahun = request()->tahun;
    $kategori_data = request()->kategori_data;

    $senaraiHarga = SenaraiHarga::find($id);
    //nullification data
    $senaraiHarga->saiz_data = null;
    $senaraiHarga->jenis_kertas = null;
    $senaraiHarga->tahun = null;
    $senaraiHarga->kategori_data = null;

    //update data
    $senaraiHarga->jenis_dokumen = request()->jenis_dokumen;

    if(request()->jenis_dokumen == 'Bercetak'){
      $senaraiHarga->jenis_kertas = request()->jenis_kertas;
      $jumlah_harga =request()->harga_asas;
    }else {
      $senaraiHarga->saiz_data = request()->saiz_data ;
      $jumlah_harga = request()->saiz_data * request()->harga_asas;
    }

    $senaraiHarga->jenis_data = request()->jenis_data;

    if (request()->jenis_data == 'Petak Kajian') {
      $senaraiHarga->kategori_data = $kategori_data;
    }
    else {
      $senaraiHarga->tahun = $tahun;
    }
    $senaraiHarga->negeri = request()->negeri;
    $senaraiHarga->harga_asas = request()->harga_asas;
    $senaraiHarga->jumlah_harga = $jumlah_harga;
    $senaraiHarga->save();
  }

  public function updateHarga($id, Request $request){
    // dd($request->all());
    $harga = SenaraiHarga::findOrFail($id);
    $harga->harga_asas = $request->harga_asas;
    $harga->save();

    // $this->validator(request()->all())->validate();
    //
    // if($request->jenis_dokumen == "Vektor Shapefile"){
    //   if($request->jenis_data != "Petak Kajian"){
    //     $searchVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('tahun' , $request->tahun)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('status' , "Aktif")
    //                                 ->count();
    //
    //     $idVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('tahun' , $request->tahun)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('status' , "Aktif")->get();
    //
    //   }else {
    //     $searchVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('kategori_data' , $request->kategori_data)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('status' , "Aktif")
    //                                 ->count();
    //
    //     $idVektor = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('kategori_data' , $request->kategori_data)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('status' , "Aktif")->get();
    //   }
    //
    //   if($searchVektor > 0 && $idVektor[0]->id != $id){
    //     return redirect()->route('senarai-harga.edit', $id)->with('error','Data Geospatial ini telah didaftarkan.');
    //   }
    // }else {
    //   if($request->jenis_data != "Petak Kajian"){
    //     $searchBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('tahun' , $request->tahun)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('jenis_kertas' , $request->jenis_kertas)
    //                                 ->where('status' , "Aktif")
    //                                 ->count();
    //
    //     $idBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('tahun' , $request->tahun)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('jenis_kertas' , $request->jenis_kertas)
    //                                 ->where('status' , "Aktif")->get();
    //   }else {
    //     $searchBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('kategori_data' , $request->kategori_data)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('jenis_kertas' , $request->jenis_kertas)
    //                                 ->where('status' , "Aktif")
    //                                 ->count();
    //
    //     $idBercetak = SenaraiHarga::where('jenis_dokumen' , $request->jenis_dokumen)
    //                                 ->where('jenis_data' , $request->jenis_data)
    //                                 ->where('kategori_data' , $request->kategori_data)
    //                                 ->where('negeri' , $request->negeri)
    //                                 ->where('jenis_kertas' , $request->jenis_kertas)
    //                                 ->where('status' , "Aktif")->get();
    //   }
    //
    //   if($searchBercetak > 0 && $idBercetak[0]->id != $id){
    //     return redirect()->route('senarai-harga.edit', $id)->with('error','Data Geospatial ini telah didaftarkan.');
    //   }
    //
    // }
    // $harga = SenaraiHarga::findOrFail($id);
    // // dd($harga);
    // $harga->jenis_dokumen = $request->jenis_dokumen;
    //
    // if($request->jenis_dokumen == "Bercetak"){
    //   $harga->jenis_kertas = $request->jenis_kertas;
    // }else {
    //   $harga->saiz_data = $request->saiz_data;
    // }
    //
    // $harga->jenis_data = $request->jenis_data;
    //
    // if($request->jenis_data == "Petak Kajian"){
    //   $harga->kategori_data = $request->kategori_data;
    // }else {
    //   $harga->tahun = $request->tahun;
    // }
    //
    // $harga->negeri = $request->negeri;
    //
    // $harga->harga_asas = $request->harga_asas;
    //
    // dd($harga);
    //
    // $harga->update();
    return redirect()->route('senarai-harga.list')->with('success','Maklumat data telah dikemaskini');
  }

  public function deleteHarga($id){
      $senaraiHarga = SenaraiHarga::find($id);
      $senaraiHarga->status = 'Tidak Aktif';
      $senaraiHarga->save();
      return redirect()->route('senarai-harga.list')->with('success','Data telah dibuang dari senarai');
  }
}

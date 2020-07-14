<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;

use Auth;

class PermohonanController extends Controller
{
  public function hargaPermohonan($id){
    $permohonan = Permohonan::findorfail($id);

    $dataPermohonan = DataPermohonan::where('permohonan_id',$id)
                        ->get();

    $i = 0;
    foreach ($dataPermohonan as $value) {

      $senaraiHargaUser[$i] = SenaraiHarga::where('id', $value->senarai_harga_id)->get();
      $i++;
    }
    $dataPermohonan = $id;


    //$senaraiHargaId = $permohonan->senarai_harga_id;
    //$harga = SenaraiHarga::findorfail($senaraiHargaId);
    //dd($harga);
    //dd($permohonan);
    return view('permohonan.harga.view', compact('dataPermohonan', 'senaraiHargaUser'));
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          //'saiz_data[]' => ['required','numeric'],
          //'saiz_data' => ['required','numeric'],
          'harga_aoi' => ['nullable', 'numeric'],
          'harga_lain' => ['nullable', 'numeric'],

      ]);
  }

  public function updateHarga($id, Request $request){
    $this->validator($request->all())->validate();

    $test = $request->all();

    $countData = count($request->saiz_data);

    //calculate total price for all data
    $jumlah = 0.00;
    for ($i = 0; $i < $countData; $i++) {
      //dd($test['harga_asas'][0]) ;
      //$jumlah = $jumlah + $test['saiz_data'];
      $jumlah = $jumlah + ($test['harga_asas'][$i] * $test['saiz_data'][$i]);
    }

    //add harga aoi into jumlah
    if(isset($request->harga_aoi)){
      $jumlah = $jumlah + $request->harga_aoi;

    }

    //add harga tambahan into jumlah
    if(isset($request->harga_lain)){
      $jumlah = $jumlah + $request->harga_lain;

    }

    //update data into DB
    $permohonan = Permohonan::findOrFail($id);

    $permohonan->jumlah_bayaran = $jumlah;

    $permohonan->save();

    //route to next page
    return $this->viewInformasiPermohonan($id);
  }

  public function updateUlasan($id, Request $request){
    $user_id = Auth::user()->id;
    $current_user_info = User::findOrFail($user_id);
    //dd( $current_user_info->role);

    $permohonan = Permohonan::findOrFail($id);

    $permohonan->ulasan_admin = $request->ulasan_admin;

    $permohonan->ulasan_penyokong_1 = $request->ulasan_penyokong1;

    $permohonan->ulasan_penyokong_2 = $request->ulasan_penyokong2;

    $permohonan->ulasan_ketua_pengarah = $request->ulasan_ketua_pengarah;

    if($current_user_info->role == 3){
      $permohonan->status_permohonan = "Lulus";
    }

    $permohonan->save();

    return app('App\Http\Controllers\HomeController')->senaraiPermohonan();
  }

  public function viewInformasiPermohonan($id){
      $permohonan = Permohonan::findorfail($id);
      $loop =  Permohonan::findorfail($id)->count();
      $user = User::where('id', $permohonan->user_id )->first();

      //current user id
      $user_id = Auth::user()->id;
      $current_user_info = User::findOrFail($user_id);
      //dd($current_user_info);

      //fetch data list

      $dataPermohonan = DataPermohonan::where('permohonan_id',$id)
                          ->get();
      $i = 0;
      foreach ($dataPermohonan as $value) {

        $senaraiHargaUser[$i] = SenaraiHarga::where('id', $value->senarai_harga_id)->get();
        $i++;
      }


      return view('permohonan.view',  compact('permohonan','loop','user','current_user_info','senaraiHargaUser'));
  }
}

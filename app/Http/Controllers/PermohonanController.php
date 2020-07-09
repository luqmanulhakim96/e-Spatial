<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permohonan;
use App\SenaraiHarga;

class PermohonanController extends Controller
{
  public function hargaPermohonan($id){
    $permohonan = Permohonan::findorfail($id);
    $senaraiHargaId = $permohonan->senarai_harga_id;
    $harga = SenaraiHarga::findorfail($senaraiHargaId);
    //dd($harga);
    //dd($permohonan);
    return view('permohonan.harga.view', compact('permohonan','harga'));
  }

  public function viewInformasiPermohonan($id){
      $permohonan = Permohonan::findorfail($id);
      $loop =  Permohonan::findorfail($id)->count();
      return view('permohonan.view',  compact('permohonan','loop'));
  }
}

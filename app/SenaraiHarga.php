<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class SenaraiHarga extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;

  protected $fillable = [
    'jenis_data', 'saiz_data', 'negeri', 'tahun', 'harga_asas', 'jumlah_harga', 'jenis_dokumen','kategori_data','jenis_kertas','status'
  ];

  public function harga(){
    return $this->hasMany('App\DataPermohonan');
  }
}

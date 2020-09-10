<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class DataPermohonan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
      'senarai_harga_id',
      'permohonan_id',
      'custom_jenis_data',
      'custom_tahun',
      'saiz_data',
      'jumlah_harga_data'
    ];

    public function harga(){
      return $this->belongsTo('\App\SenaraiHarga', 'senarai_harga_id');
    }

    public function permohonan(){
      return $this->belongsTo('\App\Permohonan', 'permohonan_id');
    }

}

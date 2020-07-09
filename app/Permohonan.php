<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Permohonan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
      'attachment_permohonan',
      'dokumen_ke_luar_negara',
      'ulasan_admin',
      'ulasan_penyokong_1',
      'ulasan_penyokong_2',
      'ulasan_ketua_pengarah',
      'no_rujukan',
      'status_permohonan',
      'status_pembayaran',
      'user_id',
      'jumlah_bayaran',
      'senarai_harga_id',
      'maklumat_agensi_dan_negara'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function data(){
      return $this->hasMany('App\DataPermohonan');
    }



}

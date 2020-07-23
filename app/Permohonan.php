<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Notifications\Notifiable;

class Permohonan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Notifiable;

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
      'maklumat_agensi_dan_negara',
      'attachment_aoi',
      'attachment_receipt_pembayaran',
      'attachment_penerimaan_data',
      'attachment_surat_bayaran',
      'link_data',
      'attachment_penerimaan_data_user'
    ];

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    public function data(){
      return $this->hasMany('App\DataPermohonan');
    }



}

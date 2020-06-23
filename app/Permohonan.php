<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{

    protected $fillable = [
      'jenis_data', 'jenis_hutan', 'negeri', 'tahun', 'attachment_permohonan',
      'dokumen_ke_luar_negara', 'ulasan_admin', 'ulasan_penyokong_1',
      'ulasan_penyokong_2', 'ulasan_ketua_pengarah', 'no_rujukan'
    ];
}

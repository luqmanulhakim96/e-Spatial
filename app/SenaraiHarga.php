<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SenaraiHarga extends Model
{
  protected $fillable = [
    'jenis_data', 'saiz_data', 'negeri', 'tahun', 'harga_asas', 'jumlah_harga'
  ];
}

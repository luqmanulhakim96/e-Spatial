<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class SenaraiHarga extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
  
  protected $fillable = [
    'jenis_data', 'saiz_data', 'negeri', 'tahun', 'harga_asas', 'jumlah_harga'
  ];
}

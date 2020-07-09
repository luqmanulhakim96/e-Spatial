<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SenaraiSurat extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
    //

  // protected $fillable = [
  //   'nombor_rujukan', 'tarikh', 'tajuk_surat', 'perenggan_satu', 'perenggan_dua', 'perenggan_tiga',
  //   'perenggan_empat', 'perenggan_lima', 'penutup', 'nama_tandatangan', 'jawatan_tandatangan', 'surat_kepada'
  // ];
  protected $fillable = [
    'nombor_rujukan', 'tarikh', 'kandungan',
  ];
  protected $dates = ['created_at','updated_at'];
}

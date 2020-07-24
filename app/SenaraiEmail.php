<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SenaraiEmail extends Model
{
  protected $fillable = [
    'subjek', 'tajuk', 'kandungan', 'jenis', 'kepada',
  ];
  protected $dates = ['created_at','updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
  protected $table = 'pengumumans';
  protected $fillable = [
    'tajuk',
    'content',
    'user_id',
    'status'
  ];

  public function user2()
  {
      return $this->belongsTo('\App\User', 'user_id');
  }

}

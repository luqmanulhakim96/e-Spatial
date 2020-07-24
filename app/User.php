<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'kategori', 'kad_pengenalan', 'kerakyatan',
        'tarikh_lahir', 'tempat_lahir', 'jawatan', 'alamat_kediaman', 'nama_kementerian',
        'alamat_kementerian', 'jenis_perniagaan', 'no_tel_rumah', 'no_tel_bimbit', 'status','bahagian'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user(){
      return $this->hasMany('App\Permohonan');
    }
}

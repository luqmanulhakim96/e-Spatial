<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12', 'unique:users'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required', 'string', 'max:255'],
            // 'nama_kementerian' => ['string', 'max:255'],
            // 'alamat_kementerian' => ['string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $hashed_random_password = Hash::make(str_random(8));
        dd($hashed_random_password);
        return User::create([
            'kategori' => $data['kategori'],
            'name' => $data['name'],
            'email' => $data['email'],
            'kad_pengenalan' => $data['kad_pengenalan'],
            'kerakyatan' => $data['kerakyatan'],
            'tarikh_lahir' => $data['tarikh_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'jawatan' => $data['jawatan'],
            'jenis_perniagaan' => $data['jenis_perniagaan'],
            'alamat_kediaman' => $data['alamat_kediaman'],
            'nama_kementerian' => $data['nama_kementarian'],
            'alamat_kementerian' => $data['alamat_kementerian'],
            'no_tel_rumah' => $data['no_tel_rumah'],
            'no_tel_bimbit' => $data['no_tel_bimbit'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

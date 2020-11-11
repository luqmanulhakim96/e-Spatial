<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use Carbon\Carbon;
use DateTime;

use App\Mail\User\EmailNotifikasiRegisterUser;
use Illuminate\Support\Facades\Mail;

use App\Jobs\SendEmailRegistration;

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
            'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8', 'unique:users'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required','string', 'max:255'],
            'poskod' => ['required','string', 'max:5', 'min:5'],
            'negeri' => ['required','string', 'max:255'],
            'nama_kementerian' => ['required','string', 'max:255'],
            'alamat_kementerian' => ['required','string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorInstitut(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8', 'unique:users'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required','string', 'max:255'],
            'poskod' => ['required','string', 'max:5', 'min:5'],
            'negeri' => ['required','string', 'max:255'],
            'nama_kementerian' => ['required','string', 'max:255'],
            'alamat_kementerian' => ['required','string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorAwam(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8', 'unique:users'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required','string', 'max:255'],
            'poskod' => ['required','string', 'max:5', 'min:5'],
            'negeri' => ['required','string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorDalaman(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12','unique:users'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'bahagian' => ['required','string', 'max:255'],
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
        $random = Str::random(10);

        $hashed_random_password = Hash::make($random);

        $user = User::create([
            'kategori' => $data['kategori'],
            'name' => $data['nama'],
            'email' => $data['email'],
            'kad_pengenalan' => $data['kad_pengenalan'],
            'kerakyatan' => $data['kerakyatan'],
            'tarikh_lahir' => $data['tarikh_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'jawatan' => $data['jawatan'],
            'jenis_perniagaan' => $data['jenis_perniagaan'],
            'nama_kementerian' => $data['nama_kementerian'],
            'alamat_kementerian' => $data['alamat_kementerian'],
            'no_tel_rumah' => $data['no_tel_rumah'],
            'no_tel_bimbit' => $data['no_tel_bimbit'],
            // 'password' => Hash::make($data['password']),
            'password' => $hashed_random_password,
        ]);
        // Mail::send(new EmailNotifikasiRegisterUser($data, $random));
        // Mail::queue(new EmailNotifikasiRegisterUser($data, $random));

        // $emailJob = (new      SendEmail($details))->delay(Carbon::now()->addMinutes(5));
        // $emailJob = SendEmail::dispatch($data,$random)->delay(Carbon::now()->addSeconds(30));
        $emailJob = (new SendEmailRegistration($data,$random))->delay(Carbon::now()->addSeconds(5));
        dispatch($emailJob);
        return $user;
    }

    protected function createInstitut(array $data)
    {
        $random = Str::random(10);

        $hashed_random_password = Hash::make($random);

        $user = User::create([
            'kategori' => $data['kategori'],
            'name' => $data['nama'],
            'email' => $data['email'],
            'kad_pengenalan' => $data['kad_pengenalan'],
            'kerakyatan' => $data['kerakyatan'],
            'tarikh_lahir' => $data['tarikh_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'jenis_perniagaan' => $data['jenis_perniagaan'],
            'nama_kementerian' => $data['nama_kementerian'],
            'alamat_kementerian' => $data['alamat_kementerian'],
            'no_tel_rumah' => $data['no_tel_rumah'],
            'no_tel_bimbit' => $data['no_tel_bimbit'],
            // 'password' => Hash::make($data['password']),
            'password' => $hashed_random_password,
        ]);
        // Mail::send(new EmailNotifikasiRegisterUser($data, $random));
        // Mail::queue(new EmailNotifikasiRegisterUser($data, $random));

        // $emailJob = (new      SendEmail($details))->delay(Carbon::now()->addMinutes(5));
        // $emailJob = SendEmail::dispatch($data,$random)->delay(Carbon::now()->addSeconds(30));
        $emailJob = (new SendEmailRegistration($data,$random))->delay(Carbon::now()->addSeconds(15));
        dispatch($emailJob);
        return $user;
    }

    protected function createAwam(array $data)
    {
        $random = Str::random(10);

        $hashed_random_password = Hash::make($random);

        $user = User::create([
            'kategori' => $data['kategori'],
            'name' => $data['nama'],
            'email' => $data['email'],
            'kad_pengenalan' => $data['kad_pengenalan'],
            'kerakyatan' => $data['kerakyatan'],
            'tarikh_lahir' => $data['tarikh_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'jawatan' => $data['jawatan'],
            'jenis_perniagaan' => $data['jenis_perniagaan'],
            'alamat_kediaman' => $data['alamat_kediaman'],
            'poskod' => $data['poskod'],
            'negeri' => $data['negeri'],
            'no_tel_rumah' => $data['no_tel_rumah'],
            'no_tel_bimbit' => $data['no_tel_bimbit'],
            // 'password' => Hash::make($data['password']),
            'password' => $hashed_random_password,
        ]);
        $emailJob = (new SendEmailRegistration($data,$random))->delay(Carbon::now()->addSeconds(30));
        dispatch($emailJob);
        return $user;
    }



    protected function createDalaman(array $data)
    {
        $random = Str::random(10);

        $hashed_random_password = Hash::make($random);

        $user = User::create([
            'kategori' => $data['kategori'],
            'name' => $data['nama'],
            'email' => $data['email'],
            'kad_pengenalan' => $data['kad_pengenalan'],
            'kerakyatan' => $data['kerakyatan'],
            'tarikh_lahir' => $data['tarikh_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'jawatan' => $data['jawatan'],
            'jenis_perniagaan' => $data['jenis_perniagaan'],
            'no_tel_rumah' => $data['no_tel_rumah'],
            'no_tel_bimbit' => $data['no_tel_bimbit'],
            'bahagian' => $data['bahagian'],

            // 'password' => Hash::make($data['password']),
            'password' => $hashed_random_password,
        ]);
        $emailJob = (new SendEmailRegistration($data,$random))->delay(Carbon::now()->addSeconds(30));
        dispatch($emailJob);
        return $user;
      }



    /**
   * Handle a registration request for the application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function register(Request $request)
    {
      if($request->kerakyatan == 'Bukan Warganegara'){
        if($request->pasport != null){
          $request->merge([
            'kad_pengenalan' => $request->pasport,
          ]);

          $request->merge([
            'tarikh_lahir' => $request->tarikh_lahir_manual,
          ]);
        }
      }

      if($request->kategori == 'dalaman'){

        $this->validatorDalaman($request->all())->validate();
        event(new Registered($user = $this->createDalaman($request->all())));

      }elseif ($request->kategori == 'awam') {

        $this->validatorAwam($request->all())->validate();
        event(new Registered($user = $this->createAwam($request->all())));

      }elseif ($request->kategori == 'institut') {
        $this->validatorInstitut($request->all())->validate();
        event(new Registered($user = $this->createInstitut($request->all())));
      }else {

        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
      }

        return redirect('/login')->with('success','Pendaftaran anda telah berjaya');
    }
}

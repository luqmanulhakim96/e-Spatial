<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\User;
use App\Audit;

use App\Mail\User\EmailNotifikasiRegisterUser;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
  public function index()
  {
    return view('home');
  }

  public function list()
  {
    $user = User::where([['role','!=','5'],['status','!=','0']])->get();
    $user_deact = User::where([['role','!=','5'],['status','!=','1']])->get();
    // dd($user);
    return view('superadmin.list', compact('user','user_deact'));
  }

  public function create(){
      return view('superadmin.add');
  }

  public function edit($id){
      $user = User::findOrFail($id);
      return view('superadmin.edit', compact('user'));
  }

  public function auditTrail()
  {
    // $data = Audit::with('user')->get();
    // $data = User::where('role','!=','5')->get();
    // $all = $user->audits;
    $data = Audit::whereHas('user', function($q) {
      $q->where('role','!=','5');
    })->get();
    // dd($data);
    return view('superadmin.audit', compact('data'));
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'nama' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'role' => ['required'],
          'kad_pengenalan' => ['required', 'string', 'max:12'],
      ]);
  }

  public function add(array $data){
    $random = Str::random(10);
    $hashed_random_password = Hash::make($random);

    $user = User::create([
      'kategori' => "JPSM",
      'name' => $data['nama'],
      'email' => $data['email'],
      'kad_pengenalan' => $data['kad_pengenalan'],
      'role' => $data['role'],
      'password' => $hashed_random_password,
    ]);

    Mail::send(new EmailNotifikasiRegisterUser($data, $random));
    return $user;
  }

  public function submitForm(Request $request){
    // dd($request->all());
    $this->validator($request->all())->validate();
    event($user = $this->add($request->all()));
    return redirect()->route('superadmin.list');
  }

  public function update($id){
    $data = User::find($id);
    $data->name = request()->nama;
    $data->email = request()->email;
    $data->role = request()->role;
    $data->kad_pengenalan = request()->kad_pengenalan;
    $data->save();
  }

  public function updateUser($id){
    $this->validator(request()->all())->validate();
    $this->update($id);
    return redirect()->route('superadmin.list');
  }

  public function delete($id){
      $user = User::find($id);
      // dd($user);
      if($user->status == false){
        $user->update(['status' => 1]);
      }
      elseif($user->status == true){
        $user->update(['status' => 0]);
      }
      return redirect()->route('superadmin.list');
  }

}

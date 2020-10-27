<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\User;
use App\Audit;

use Auth;
use DB;

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
    $currentUser = Auth::user();
    $user = User::where([['role','!=','5'],['status','!=','0']])->get();
    $user_deact = User::where([['role','!=','5'],['status','!=','1']])->get();

    return view('superadmin.list', compact('user','user_deact','currentUser'));
  }

  public function listLuar()
  {
    $currentUser = Auth::user();

    $penggunaLuar = User::where('role','5')->get();

    return view('superadmin.listPenggunaLuar', compact('penggunaLuar'));
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
    })->where('event','!=','Log Masuk')->where('event','!=','Log Keluar')->get();
    // dd($data);
    return view('superadmin.audit', compact('data'));
  }

  public function auditTrailFilter(Request $request){
    $tarikh_mula = date($request->tarikh_mula);
    $tarikh_akhir = date($request->tarikh_akhir);

    // $data = Audit::whereBetween('created_at', [$tarikh_mula.' 00:00:00',$tarikh_akhir.' 23:59:59'])
    //             ->where('event', 'Log Masuk')
    //             ->orWhere('event', 'Log Keluar')
    //             ->orderBy('created_at', 'desc')
    //             ->get();


    $data = Audit::whereHas('user', function($q) {
                  $q->where('role','!=','5');
                })->where('event','!=','Log Masuk')->where('event','!=','Log Keluar')
                ->where('created_at', '>', $tarikh_mula.' 00:00:00')
                ->where('created_at', '<', $tarikh_akhir.' 23:59:59')
                ->orderBy('created_at', 'asc')
                ->get();

    // $data = DB::select(DB::raw("SELECT * FROM audits WHERE  (event = 'Log Masuk' OR event = 'Log Keluar') AND created_at > '2020-09-18 00:00:00' AND created_at < '2020-09-21 23:59:59' ORDER BY `audits`.`created_at` DESC"));

    // dd($data);

    return view('superadmin.auditFilter', compact('data'));
  }

  public function auditTrailLogUser()
  {
    // $data = Audit::with('user')->get();
    // $data = User::where('role','!=','5')->get();
    // $all = $user->audits;
    // $data = Audit::where('event','Log Masuk')->orWhere('event','Log Keluar')->get();
    $data = Audit::where('event','Log Masuk')->get();

    // dd($data);
    return view('superadmin.auditUser', compact('data'));
  }

  public function auditTrailLogUserFilter(Request $request){
    $tarikh_mula = date($request->tarikh_mula);
    $tarikh_akhir = date($request->tarikh_akhir);

    // $data = Audit::whereBetween('created_at', [$tarikh_mula.' 00:00:00',$tarikh_akhir.' 23:59:59'])
    //             ->where('event', 'Log Masuk')
    //             ->orWhere('event', 'Log Keluar')
    //             ->orderBy('created_at', 'desc')
    //             ->get();


    $data = Audit::where('created_at', '>', $tarikh_mula.' 00:00:00')
                ->where('created_at', '<', $tarikh_akhir.' 23:59:59')
                ->where('event','Log Masuk')
                ->orderBy('created_at', 'asc')
                ->get();

    // $data = DB::select(DB::raw("SELECT * FROM audits WHERE  (event = 'Log Masuk' OR event = 'Log Keluar') AND created_at > '2020-09-18 00:00:00' AND created_at < '2020-09-21 23:59:59' ORDER BY `audits`.`created_at` DESC"));

    // dd($data);

    return view('superadmin.auditUserFilter', compact('data'));
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'nama' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'role' => ['required'],
          'kad_pengenalan' => ['required', 'string', 'max:12', 'unique:users'],
      ]);
  }

  public function add(array $data){
    $random = Str::random(10);
    $hashed_random_password = Hash::make($random);

    $user = User::create([
      'kategori' => "dalaman",
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
    return redirect()->route('superadmin.list')->with('success','Pengguna baru berjaya ditambah');
  }

  public function update($id){
    $data = User::find($id);
    $data->name = request()->nama;
    $data->email = request()->email;
    $data->role = request()->role;
    $data->kad_pengenalan = request()->kad_pengenalan;
    $data->save();
  }

  protected function validatorUpdate(array $data)
  {
      return Validator::make($data, [
          'nama' => ['required'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'role' => ['required'],
          'kad_pengenalan' => ['required', 'string', 'max:12'],
      ]);
  }

  public function updateUser($id){


    $this->validatorUpdate(request()->all())->validate();
    $this->update($id);
    return redirect()->route('superadmin.list')->with('success','Permohonan anda berjaya membuat permohonan data.');
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
      return redirect()->route('superadmin.list')->with('success','Pengguna berjaya dinyahaktif');
  }

}

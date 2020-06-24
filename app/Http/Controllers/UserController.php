<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Permohonan;
use App\User;
use Auth;

class UserController extends Controller
{
  public function index()
  {
    $nama = User::find(1);
    // dd($nama);
      return view('user.mainMenu', compact('nama'));
  }

  public function list(){
      return view('user.list');
  }

  public function add(){
    return view('user.add');
  }

  public function create(array $data){
    $user_id = Auth::user()->id;
    return Permohonan::Create([
      'jenis_data' => $data['jenis_data'],
      'jenis_hutan' => $data['jenis_hutan'],
      'negeri' => $data['negeri'],
      'tahun' => $data['tahun'],
      'attachment_permohonan' => $data['attachment_permohonan'],
      'dokumen_ke_luar_negara' => $data['dokumen_ke_luar_negara'],
      'user_id' => $user_id
    ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'jenis_data' => ['required'],
          'jenis_hutan' => ['required'],
          'negeri' => ['required'],
          'tahun' => ['required', 'numeric',  'digits:4' ],
          'dokumen_ke_luar_negara' => ['required'],
      ]);
  }

  public function submitForm(Request $request){
    $this->validator($request->all())->validate();

    event($permohonanBaru = $this->create($request->all()));

    return redirect()->route('user.list');
  }


}

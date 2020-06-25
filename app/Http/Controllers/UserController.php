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
    $user_id = Auth::user()->id;
    $list = Permohonan::where('user_id','=',$user_id)->get();

    return view('user.list', compact('list'));
  }

  public function add(){
    return view('user.add');
  }

  public function create(array $data){
    $user_id = Auth::user()->id;
    //dd($data);
    return Permohonan::Create([
      'jenis_data' => $data['jenis_data'],
      'jenis_hutan' => $data['jenis_hutan'],
      'negeri' => $data['negeri'],
      'tahun' => $data['tahun'],
      'attachment_permohonan' => $data['attachment_permohonan'],
      'dokumen_ke_luar_negara' => $data['dokumen_ke_luar_negara'],
      'status_permohonan' => $data['status_permohonan'],
      'status_pembayaran' => $data['status_pembayaran'],
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

  public function edit($id){
    $info = Permohonan::findOrFail($id);

    return view('user.edit', compact('info'));
  }

  public function update($id){
    $permohonan = Permohonan::find($id);
    $permohonan->jenis_data = request()->jenis_data;
    $permohonan->jenis_hutan = request()->jenis_hutan;
    $permohonan->negeri = request()->negeri;
    $permohonan->tahun = request()->tahun;
    $permohonan->dokumen_ke_luar_negara = request()->dokumen_ke_luar_negara;
  }

  public function updatePermohonan($id){
    $this->validator(request()->all())->validate();

    $this->update($id);
    return redirect()->route('user.list');
  }

}

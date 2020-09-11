<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SenaraiEmail;
use Illuminate\Support\Facades\Validator;

use DB;
use PDF;
use Auth;

class SenaraiEmailController extends Controller
{
  public function view(){
      $list = SenaraiEmail::get();
      return view('senarai-email.list', compact('list'));
  }

  public function create(){
      return view('senarai-email.add');
  }

  public function edit($id){
    $info = SenaraiEmail::findOrFail($id);
    $pemohon = Auth::user()->id;

    return view('senarai-email.edit', compact('info','pemohon'));
  }

  public function add(array $data){
    return SenaraiEmail::create([
      'subjek' => $data['subjek'],
      'tajuk' => $data['tajuk'],
      'kandungan' => $data['kandungan'],
      'jenis' => $data['jenis'],
      'kepada' => $data['kepada'],
    ]);
  }

  public function submitForm(Request $request){
    // dd(($request->all()));
    $this->validator($request->all())->validate();

    event($senaraiEmail = $this->add($request->all()));

    return redirect()->route('senarai-email.list')->with('success','Templat baru telah ditambah');
  }

  public function update($id){
    $senarai = SenaraiEmail::find($id);
    $senarai->subjek = request()->subjek;
    $senarai->tajuk = request()->tajuk;
    $senarai->kandungan = request()->kandungan;
    $senarai->jenis = request()->jenis;
    $senarai->kepada = request()->kepada;
    $senarai->save();
  }

  public function updateSurat($id){
    $this->validator(request()->all())->validate();
    $this->update($id);
    return redirect()->route('senarai-email.list')->with('success','Templat telah dikemaskini');
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'subjek' => ['required', 'string'],
          'tajuk' => ['required', 'string'],
          'kandungan' => ['required', 'string'],
          'kepada' => ['required'],
          'jenis' => ['required']
      ]);
  }

  public function delete($id)
  {
    $email = SenaraiEmail::findOrFail($id);
    $email->delete();
    return redirect()->route('senarai-email.list')->with('success','Templat telah dipadam');
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\SenaraiSurat;
use DB;

class SenaraiSuratController extends Controller
{
    public function view(){
        return view('senarai-surat.list');
    }

    public function create(){
        return view('senarai-surat.add');
    }

    public function editSurat($id){
      $info = SenaraiSurat::findOrFail($id);
      return view('senarai-surat.edit', compact('info'));
    }

    public function add(array $data){
      return SenaraiSurat::create([
        'alamat_1' => $data['alamat_1'],
        'alamat_2' => $data['alamat_2'],
        'alamat_3' => $data['alamat_3'],
        'poskod' => $data['poskod'],
        'negeri' => $data['negeri'],
        'kandungan' => $data['kandungan'],
      ]);
    }

    public function submitForm(Request $request){
      $this->validator($request->all())->validate();

      event($senaraiSurat = $this->add($request->all()));

      return redirect()->route('senarai-surat.list');
    }

    public function update($id){
      $senarai = SenaraiSurat::find($id);
      $senarai->alamat_1 = request()->alamat_1;
      $senarai->alamat_2 = request()->alamat_2;
      $senarai->alamat_3 = request()->alamat_3;
      $senarai->poskod = request()->poskod;
      $senarai->negeri = request()->negeri;
      $senarai->kandungan = request()->kandungan;
      $senarai->save();
    }

    public function updateSurat($id){
      $this->validator(request()->all())->validate();

      $this->update($id);
      return redirect()->route('senarai-surat.list');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'alamat_1' => ['required', 'string'],
            'alamat_2' => ['required', 'string'],
            'alamat_3' => ['required', 'string'],
            'poskod' => ['required', 'numeric',  'digits:5' ],
            'negeri' => ['required', 'string'],
            'kandungan' => ['required', 'string'],
        ]);
    }

}

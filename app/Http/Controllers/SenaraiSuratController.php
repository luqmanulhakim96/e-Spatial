<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\SenaraiSurat;
use DB;
use PDF;
use Auth;

class SenaraiSuratController extends Controller
{
    public function view(){
        $list = SenaraiSurat::get();
        return view('senarai-surat.list', compact('list'));
    }

    public function create(){
        return view('senarai-surat.add');
    }

    public function edit($id){
      $info = SenaraiSurat::findOrFail($id);
      $pemohon = Auth::user()->id;

      return view('senarai-surat.edit', compact('info','pemohon'));
    }

    public function add(array $data){
      return SenaraiSurat::create([
        'nombor_rujukan' => $data['nombor_rujukan'],
        'tarikh' => $data['tarikh'],
        'kandungan' => $data['kandungan'],
      ]);
    }

    public function submitForm(Request $request){
      // dd(($request->all()));
      $this->validator($request->all())->validate();

      event($senaraiSurat = $this->add($request->all()));

      return redirect()->route('senarai-surat.list');
    }

    public function update($id){
      $senarai = SenaraiSurat::find($id);
      $senarai->nombor_rujukan = request()->nombor_rujukan;
      $senarai->tarikh = request()->tarikh;
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
            'nombor_rujukan' => ['required', 'string'],
            'tarikh' => ['required', 'date'],
            'kandungan' => ['required', 'string']
        ]);
    }

    public function print($id)
    {
        $surat = SenaraiSurat::find($id);

        // $pdf = PDF::loadView('senarai-surat.pdf', compact(['surat']))->setPaper('a4');
        // $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');
        $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');

        return $pdf->download('surat-' . $surat->created_at->format('d-m-Y') . '.pdf');
    }
}

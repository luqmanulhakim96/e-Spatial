<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\SenaraiSurat;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;

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
        'status_pembayaran' => $data['status_pembayaran']
      ]);
    }

    public function submitForm(Request $request){
      // dd(($request->all()));
      $this->validator($request->all())->validate();

      event($senaraiSurat = $this->add($request->all()));

      return redirect()->route('senarai-surat.list')->with('success','Templat baru telah ditambah');
    }

    public function update($id){
      $senarai = SenaraiSurat::find($id);
      $senarai->nombor_rujukan = request()->nombor_rujukan;
      $senarai->tarikh = request()->tarikh;
      $senarai->kandungan = request()->kandungan;
      $senarai->status_pembayaran = request()->status_pembayaran;
      $senarai->save();
    }

    public function updateSurat($id){
      $this->validator(request()->all())->validate();

      $this->update($id);
      return redirect()->route('senarai-surat.list')->with('success','Surat telah dikemaskini');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombor_rujukan' => ['required', 'string'],
            'tarikh' => ['required', 'date'],
            'kandungan' => ['required', 'string'],
            'status_pembayaran' => ['required']
        ]);
    }

    public function print($id)
    {
        $surat = SenaraiSurat::find($id);
        // dd($surat->kandungan);
        $pagebreak = '<p><!-- pagebreak --></p>';
        $span_pagebreak = '<span style="page-break-before: always;"></span>';
        // dd(substr_count($surat->kandungan, $pagebreak));
        $surat_baru = str_replace($pagebreak,$span_pagebreak,$surat->kandungan);
        // $excerpt = substr($surat->kandungan, 0, strpos($surat->kandungan, $pagebreak));
        // dd($test);
        $pdf = PDF::loadView('senarai-surat.pdf', compact(['surat_baru']))->setPaper('a4');
        // $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');
        // $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');
        $content = $pdf->download()->getOriginalContent();
        Storage::put('public/surat/surat-' . $surat->updated_at->format('d-m-Y') . '.pdf',$content);
        // return $pdf->stream();
        return $pdf->download('surat-' . $surat->updated_at->format('d-m-Y') . '.pdf');
    }

    public function delete($id)
    {
      $surat = SenaraiSurat::findOrFail($id);
      $surat->delete();
      return redirect()->route('senarai-surat.list')->with('success','Surat telah dipadam');
    }
}

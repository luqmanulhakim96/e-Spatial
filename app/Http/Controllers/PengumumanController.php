<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;
use App\SenaraiSurat;
use Storage;
use Auth;

use App\Pengumuman;

class PengumumanController extends Controller
{
    public function viewAdd(){

      return view('pengumuman.add');
    }

    public function submit(Request $request){

      $user_id = Auth::user()->id;
      $status = "1";

      Pengumuman::create([
        'tajuk' => $request->tajuk,
        'content' => $request->content,
        'user_id' => $user_id,
        'status' => $status,
      ]);

      return redirect()->route('pengumuman.list')->with('success','Pengumuman telah ditambah');
    }

    public function list(){
      $user = Auth::user();
      $list = Pengumuman::where('status','1')->with('user2')->get();
      // $list = Pengumuman::with('user2')->get();

      // dd($list);
      return view('pengumuman.list', compact('list','user'));
    }

    public function delete($id){
      $pengumuman = Pengumuman::findOrFail($id);

      $pengumuman->status = "0";

      $pengumuman->save();

      return redirect()->route('pengumuman.list')->with('success','Pengumuman telah dipadam');
    }
}

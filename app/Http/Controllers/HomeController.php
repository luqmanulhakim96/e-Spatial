<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;

use App\SenaraiHarga;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $nama = User::find(1);
      // dd($nama);
        return view('home', compact('nama'));
    }

    public function senaraiPemohon(){
      $listPemohon = User::get();
      $loop = User::find(1)->count();
      return view('permohonan.list', compact('listPemohon', 'loop'));
    }

    public function viewInformasiPemohon(){
        $pemohon = User::find(1);
        $loop =  User::find(1)->count();
        return view('permohonan.view',  compact('pemohon','loop'));
    }

    public function senaraiHarga(){
        $list = SenaraiHarga::get();
        // $loop = SenaraiHarga::find(1)->count();
        // $list = DB::table('senarai_hargas')->get();
        // dd($list);
        return view('senarai-harga.list', compact('list'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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
    public function viewInformasiPemohon(){
        $pemohon = User::find(1);
        return view('permohonan.view',  compact('pemohon'));
    }
}

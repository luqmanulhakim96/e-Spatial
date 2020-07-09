<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;

use App\SenaraiHarga;

use App\Permohonan;

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

    public function senaraiPermohonan(){
      $listPermohonanBaru = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->distinct()
                            ->get();
      $listPermohonanLulus = Permohonan::where('status_permohonan', 'Lulus')->get();

      //$userDalaman = User::where('role','!=','5')->get();

      // $listPermohonan = Permohonan::with('user')->where('status_permohonan', 'Sedang Diproses')->get();
      // $listPermohonan = Permohonan::with([
      //    'user' => function($q) use ($user){
      //       $q->where('role','!=','5');
      // }])->where('status_permohonan', 'Sedang Diproses')->get();
      // dd($listPermohonan->user->role)

      return view('permohonan.list', compact('listPermohonanBaru', 'listPermohonanLulus'));
    }



    public function senaraiHarga(){
        $list = SenaraiHarga::get();
        // $loop = SenaraiHarga::find(1)->count();
        // $list = DB::table('senarai_hargas')->get();
        // dd($list);
        return view('senarai-harga.list', compact('list'));
    }
}

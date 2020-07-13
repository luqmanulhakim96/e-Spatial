<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Auth;

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
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanBaru = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->get();
      $listPermohonanLulus = Permohonan::where('status_permohonan', 'Lulus')->get();

      // $listPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
      //   $q->where('kategori', '=', 'dalaman');
      //   $q->where('id', '=', '2');
      // })->get();

      $listPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
        $q->where('kategori', '=', 'dalaman');
      })->get();
      //dd($listPermohonanDalaman);

      // $listPermohonanDalaman = DB::select(DB::raw("SELECT * from permohonans permohonans, users users WHERE permohonans.user_id = users.id AND users.kategori = 'dalaman'"));
      //dd($listPermohonanDalaman[0]);
      //dd($listPermohonanBaru);

      //$userDalaman = User::where('role','!=','5')->get();

      // $listPermohonan = Permohonan::with('user')->where('status_permohonan', 'Sedang Diproses')->get();
      // $listPermohonan = Permohonan::with([
      //    'user' => function($q) use ($user){
      //       $q->where('role','!=','5');
      // }])->where('status_permohonan', 'Sedang Diproses')->get();
      // dd($listPermohonan->user->role)

      return view('permohonan.list', compact('listPermohonanBaru', 'listPermohonanLulus', 'listPermohonanDalaman', 'userInfo' ));
    }



    public function senaraiHarga(){
        $list = SenaraiHarga::where('status','Aktif')
                  ->get();
        // $loop = SenaraiHarga::find(1)->count();
        // $list = DB::table('senarai_hargas')->get();
        // dd($list);
        return view('senarai-harga.list', compact('list'));
    }
}

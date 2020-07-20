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
        //getting notification function is in Providers/AppServiceProvider
        
        return view('home');
    }

    public function senaraiPermohonan(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanBaru = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_admin')
                            ->get();

      $listPermohonanBaru2 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->get();


      $listPermohonanBaru_p1 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                                ->whereNull('ulasan_penyokong_1')
                                ->whereNotNull('ulasan_admin')
                                ->get();

      $listPermohonanBaru_p2 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                                ->whereNull('ulasan_penyokong_2')
                                ->whereNotNull('ulasan_penyokong_1')
                                ->whereNotNull('ulasan_admin')
                                ->get();

      $listPermohonanBaru_kp = Permohonan::where('status_permohonan', 'Sedang Diproses')
                                ->whereNull('ulasan_ketua_pengarah')
                                ->whereNotNull('ulasan_penyokong_1')
                                ->whereNotNull('ulasan_penyokong_2')
                                ->whereNotNull('ulasan_admin')
                                ->get();

      $listPermohonanLulus = Permohonan::where('status_permohonan', 'Lulus')->get();

      $listPermohonanGagal = Permohonan::where('status_permohonan', 'Gagal')->get();

      //dd($listPermohonanBaru_p2);
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

      return view('permohonan.list', compact('listPermohonanBaru','listPermohonanBaru2', 'listPermohonanLulus','listPermohonanGagal', 'listPermohonanDalaman', 'userInfo','listPermohonanBaru_p1','listPermohonanBaru_p2','listPermohonanBaru_kp' ));
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

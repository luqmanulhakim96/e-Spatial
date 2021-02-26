<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator,Redirect,Response,File;

use Illuminate\Support\Facades\Hash;

use DB;

use Auth;

use App\User;

use App\Audit;

use App\SenaraiHarga;

use App\Permohonan;

use App\DataPermohonan;



use Carbon;

use Illuminate\Notifications\DatabaseNotification as Notification;


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

    public function getDataPieChart(){
      $data = DB::select(DB::raw("SELECT COUNT(senarai_hargas.negeri) as count, senarai_hargas.negeri FROM senarai_hargas, data_permohonans, permohonans WHERE permohonans.id = data_permohonans.permohonan_id AND senarai_hargas.id = data_permohonans.senarai_harga_id GROUP BY senarai_hargas.negeri"));
      //dd($data);
      return json_encode($data);
      exit;
    }

    public function index()
    {
      $user_id = Auth::user()->id;

      $nama = User::find(1);

      $countPermohonanBaruPS = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_admin')
                            ->count();

      $countPermohonanBaruP1 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_admin')
                            ->count();

      $countPermohonanBaruP2 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_penyokong_2')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->count();

      $countPermohonanBaruKP = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_ketua_pengarah')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_penyokong_2')
                            ->count();

      $countPermohonanSedangDiproses = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->count();

      $countPermohonanSedangDiproses1 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->count();

      $countPermohonanSedangDiproses2 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_penyokong_2')
                            ->count();

      $countPermohonanSedangDiprosesKP = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_penyokong_2')
                            ->whereNotNull('ulasan_ketua_pengarah')
                            ->count();

      $countPermohonanLulus = Permohonan::where('status_permohonan', 'Lulus')
                            ->count();

      $countPermohonanGagal = Permohonan::where('status_permohonan', 'Gagal')
                            ->count();

      $countPermohonanTidakBerkaitan = Permohonan::where('status_permohonan', 'Tidak Berkaitan')
                            ->count();

      $countPermohonanBatal = Permohonan::where('status_permohonan', 'Batal')
                                                  ->count();

      $countPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
        $q->where('kategori', '=', 'dalaman');      })->count();

      $countPermohonanKeseluruhan = Permohonan::count();

      $countSenaraiHarga = SenaraiHarga::count();

      $countPengguna = User::where('role', '5')
                        ->count();

      $countPenggunaDalaman = User::where('role', '!=', 5)
                        ->count();

      //google chart
      $dataDipohonMengikutNegeri = DB::select(DB::raw("SELECT COUNT(senarai_hargas.negeri) as count, senarai_hargas.negeri FROM senarai_hargas, data_permohonans, permohonans WHERE permohonans.id = data_permohonans.permohonan_id AND senarai_hargas.id = data_permohonans.senarai_harga_id GROUP BY senarai_hargas.negeri"));
      //dd($data);
      //$mytime = Carbon\Carbon::now();
      //dd($mytime->year);
      $dataDipohonMengikutBulan = DB::select(DB::raw("SELECT EXTRACT(MONTH FROM created_at) as bulan, COUNT(EXTRACT(MONTH FROM created_at)) as count_bulan from permohonans where created_at >= date_sub(now(),interval 6 month) GROUP BY bulan"));

      $dataStatusPermohonan = DB::select(DB::raw("SELECT COUNT(permohonans.status_permohonan) as count_status, permohonans.status_permohonan as status FROM permohonans GROUP BY status"));

      $dataJumlahPendapatan = DB::select(DB::raw("SELECT SUM(permohonans.jumlah_bayaran) as total, EXTRACT(MONTH FROM created_at) as bulan from permohonans WHERE permohonans.ulasan_admin IS NOT NULL AND permohonans.status_pembayaran <> 'Pengecualian Bayaran' AND permohonans.status_permohonan = 'Lulus' GROUP BY bulan"));

      $jumlahJenisDokumen =  DB::select(DB::raw("SELECT COUNT(senarai_hargas.jenis_dokumen) as count_jenis_dokumen, senarai_hargas.jenis_dokumen as jenis_dokumen FROM senarai_hargas, data_permohonans, permohonans WHERE permohonans.id = data_permohonans.permohonan_id AND senarai_hargas.id = data_permohonans.senarai_harga_id GROUP BY senarai_hargas.jenis_dokumen"));


      //Admin dashboard
      $countPenggunaAdmin = User::where([['role','!=','5'],['status','!=','0']])->count();

      $countPenggunaLuar = User::where('role','5')->count();

      $countAuditTrail = Audit::whereHas('user', function($q) {
        $q->where('role','!=','5');
      })->where('event','!=','Log Masuk')->where('event','!=','Log Keluar')->count();

      $countAuditTrailLog = Audit::where('event','Log Masuk')->orWhere('event','Log Keluar')->count();



        return view('home', compact(
          'nama',
          'countPermohonanBaruPS',
          'countPermohonanBaruP1',
          'countPermohonanBaruP2',
          'countPermohonanBaruKP',
          'countPermohonanSedangDiproses',
          'countPermohonanSedangDiproses1',
          'countPermohonanSedangDiproses2',
          'countPermohonanSedangDiprosesKP',
          'countPermohonanLulus',
          'countPermohonanGagal',
          'countPermohonanTidakBerkaitan',
          'countPermohonanBatal',
          'countPermohonanDalaman',
          'countPermohonanKeseluruhan',
          'countSenaraiHarga',
          'countPengguna',
          'countPenggunaDalaman',
          'dataDipohonMengikutNegeri',
          'dataDipohonMengikutBulan',
          'dataStatusPermohonan',
          'dataJumlahPendapatan',
          'jumlahJenisDokumen',
          'countPenggunaAdmin',
          'countPenggunaLuar',
          'countAuditTrail',
          'countAuditTrailLog'
      ));
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

      // dd($listPermohonanLulus);
      // $listPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
      //   $q->where('kategori', '=', 'dalaman');
      //   $q->where('id', '=', '2');
      // })->get();

      $listPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
        $q->where('kategori', '=', 'dalaman');      })->get();
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

    public function senaraiPermohonanBaru(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanBaru = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNull('ulasan_admin')
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

      return view('permohonan.listBaru', compact('listPermohonanBaru','userInfo', 'listPermohonanBaru_p1','listPermohonanBaru_p2','listPermohonanBaru_kp'));
    }

    public function senaraiPermohonanSedangDiproses(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listSedangProses = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->get();

      $listSedangProses1 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->get();

      $listSedangProses2 = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_penyokong_2')
                            ->get();

      $listSedangProsesKP = Permohonan::where('status_permohonan', 'Sedang Diproses')
                            ->whereNotNull('ulasan_admin')
                            ->whereNotNull('ulasan_penyokong_1')
                            ->whereNotNull('ulasan_penyokong_2')
                            ->whereNotNull('ulasan_ketua_pengarah')
                            ->get();

      return view('permohonan.listSedangDiproses', compact('listSedangProses','listSedangProses1', 'listSedangProses2','listSedangProsesKP','userInfo'));
    }

    public function senaraiPermohonanGagal(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanGagal = Permohonan::where('status_permohonan', 'Gagal')->get();

      return view('permohonan.listGagal', compact('listPermohonanGagal','userInfo'));
    }

    public function senaraiPermohonanTidakBerkaitan(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanTidakBerkaitan = Permohonan::where('status_permohonan', 'Tidak Berkaitan')->get();

      return view('permohonan.listTidakBerkaitan', compact('listPermohonanTidakBerkaitan','userInfo'));
    }

    public function senaraiPermohonanBatal(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanBatal = Permohonan::where('status_permohonan', 'Batal')->get();

      return view('permohonan.listBatal', compact('listPermohonanBatal','userInfo'));
    }

    public function senaraiPermohonanDalaman(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonanDalaman = Permohonan::whereHas('user', function($q) use($user_id) {
        $q->where('kategori', '=', 'dalaman');      })->get();

      return view('permohonan.listDalaman', compact('listPermohonanDalaman','userInfo'));
    }

    public function senaraiHarga(){
        $list = SenaraiHarga::where('status','Aktif')
                  ->get();
        // $loop = SenaraiHarga::find(1)->count();
        // $list = DB::table('senarai_hargas')->get();
        // dd($list);
        return view('senarai-harga.list', compact('list'));
    }

    public function redirectNotification($id){

      $markAsRead = Notification::where('id', $id)->first();
      // dd($markAsRead->data['permohonan_id']);
      // dd($markAsRead);

      $markAsRead->markAsRead();

      if(Auth::user()->role == '5')
      {
        $permohonanbaru = str_contains($markAsRead, 'PermohonanBaruUser');
        $permohonanlulus = str_contains($markAsRead, 'PermohonanLulusUser');
        $permohonangagal = str_contains($markAsRead, 'PermohonanGagalUser');
        $permohonantidakberkaitan = str_contains($markAsRead, 'PermohonanTidakBerkaitanUser');

        if($permohonanbaru){
          return redirect()->route('user.listSedangDiproses');
        }
        elseif ($permohonanlulus) {
          return redirect()->route('user.list');
        }
        elseif ($permohonangagal) {
          return redirect()->route('user.listGagal');
        }
        elseif ($permohonantidakberkaitan) {
          return redirect()->route('user.listTidakBerkaitan');
        }
      }
      else{
        $permohonanbaru = false;
        $permohonanlulus = false;
        $permohonangagal = false;
        $permohonandalaman = false;
        $permohonanbatal = false;

        if(str_contains($markAsRead, 'PermohonanBaruAdmin'))
        {
          $permohonanbaru = true;
        }
        else if(str_contains($markAsRead, 'PermohonanBaruAdminNull'))
        {
          $permohonanbaru = true;
        }

        if(str_contains($markAsRead, 'PermohonanLulusAdmin'))
        {
          $permohonanlulus = true;
        }
        else if(str_contains($markAsRead, 'PermohonanLulusAdminNull'))
        {
          $permohonanlulus = true;
        }

        if(str_contains($markAsRead, 'PermohonanGagalAdmin'))
        {
          $permohonangagal = true;
        }

        if(str_contains($markAsRead, 'PermohonanDalamanAdmin'))
        {
          $permohonandalaman = true;
        }

        if(str_contains($markAsRead, 'PermohonanBatalAdmin'))
        {
          $permohonanbatal = true;
        }

        if($permohonanbaru){
          return redirect()->route('permohonan.view', $markAsRead->data['permohonan_id']);
        }
        elseif ($permohonanlulus) {
          return redirect()->route('permohonan.view', $markAsRead->data['permohonan_id']);
          // return redirect()->route('permohonan.list');
        }
        elseif ($permohonangagal) {
          return redirect()->route('permohonan.view', $markAsRead->data['permohonan_id']);
          // return redirect()->route('permohonan.listGagal');
        }
        elseif ($permohonandalaman) {
          return redirect()->route('permohonan.view', $markAsRead->data['permohonan_id']);
          // return redirect()->route('permohonan.listDalaman');
        }
        elseif ($permohonanbatal) {
          return redirect()->route('permohonan.view', $markAsRead->data['permohonan_id']);
          // return redirect()->route('permohonan.listBatal');
        }
      }
    }

    public function changePassAdmin(){
      // $user = User::findOrFail($id);
      // dd($user_id = Auth::user()->id);
      return view('profil-admins.changePass');
    }

    public function updatePassAdmin(Request $request){
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);

      if(!(Hash::check($request->get('old_pass'), Auth::user()->password))){
        return redirect()->back()->with("error","Kata laluan terdahulu tidak sama");
      }

      if(strcmp($request->get('old_pass'),$request->get('new_pass'))== 0){
        return redirect()->back()->with("error","Kata laluan terdahulu tidak boleh sama dengan kata laluan sekarang");
        //dd('password lama sama dgn pass baru');
      }

      if(strcmp($request->get('new_pass_confirm'),$request->get('new_pass'))== 1){
        return redirect()->back()->with("error","Kata laluan baru tidak sama");
        //dd('password baru tak sama');
      }

      $validatedData = $request->validate([
              'old_pass' => 'required',
              'new_pass' => 'required|string|min:6',
        ]);

        $hashed_random_password = Hash::make($request->get('new_pass'));

        $user->password = $hashed_random_password;

        $user->save();

        return redirect()->route('user.mainMenu')->with("success","Kata laluan telah ditukar");
    }

    public function editProfil(){
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);

      return view('profil-admins.editProfil',compact('user'));
    }

    public function updateProfil(Request $request){
      // dd($request->all());

      // if($request->kerakyatan == 'Bukan Warganegara'){
      //   if($request->pasport != null){
      //     $request->merge([
      //       'kad_pengenalan' => $request->pasport,
      //     ]);
      //
      //     $request->merge([
      //       'tarikh_lahir' => $request->tarikh_lahir_manual,
      //     ]);
      //   }
      // }
      // dd($request->all());
      $gambar_profile = "";

      if ($files = $request->file('gambar_profile') != null) {
            $gambar_profile = $request->file('gambar_profile')->store('public/uploads/gambar_profile');
      }else {
        $gambar_profile = null;
      }


      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);

      if($request->kategori == 'dalaman'){
        // dd($request->all());

        $this->validatorDalaman($request->all())->validate();

        $user->name = $request->nama;
        // $user->kerakyatan = $request->kerakyatan;
        // $user->kad_pengenalan = $request->kad_pengenalan;
        // $user->tarikh_lahir = $request->tarikh_lahir;
        // $user->tempat_lahir = $request->tempat_lahir;
        $user->jawatan = $request->jawatan;
        $user->bahagian = $request->bahagian;
        $user->no_tel_rumah = $request->no_tel_rumah;
        $user->no_tel_bimbit = $request->no_tel_bimbit;
        $user->email = $request->email;
        if($gambar_profile != null){
          $user->gambar_profile = $gambar_profile;
        }

        $user->save();

      }elseif ($request->kategori == 'awam') {

        $this->validatorAwam($request->all())->validate();

        $user->name = $request->nama;
        $user->kerakyatan = $request->kerakyatan;
        $user->kad_pengenalan = $request->kad_pengenalan;
        $user->tarikh_lahir = $request->tarikh_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->jawatan = $request->jawatan;
        $user->jenis_perniagaan = $request->jenis_perniagaan;
        $user->alamat_kediaman = $request->alamat_kediaman;
        $user->poskod = $request->poskod;
        $user->negeri = $request->negeri;
        $user->no_tel_rumah = $request->no_tel_rumah;
        $user->no_tel_bimbit = $request->no_tel_bimbit;
        $user->email = $request->email;
        if($gambar_profile != null){
          $user->gambar_profile = $gambar_profile;
        }

        $user->save();

      }else {

        $this->validatorProfile($request->all())->validate();

        $user->name = $request->nama;
        $user->kerakyatan = $request->kerakyatan;
        $user->kad_pengenalan = $request->kad_pengenalan;
        $user->tarikh_lahir = $request->tarikh_lahir;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->jawatan = $request->jawatan;
        $user->jenis_perniagaan = $request->jenis_perniagaan;
        $user->alamat_kediaman = $request->alamat_kediaman;
        $user->poskod = $request->poskod;
        $user->negeri = $request->negeri;
        $user->nama_kementerian = $request->nama_kementerian;
        $user->alamat_kementerian = $request->alamat_kementerian;
        $user->no_tel_rumah = $request->no_tel_rumah;
        $user->no_tel_bimbit = $request->no_tel_bimbit;
        $user->email = $request->email;
        if($gambar_profile != null){
          $user->gambar_profile = $gambar_profile;
        }

        $user->save();

      }

      return redirect()->route('profil-admins.editProfil')->with('success','Profil anda telah dikemaskini');
    }

    protected function validatorProfile(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required','string', 'max:255'],
            'poskod' => ['required','string', 'max:5', 'min:5'],
            'negeri' => ['required','string', 'max:255'],
            'nama_kementerian' => ['required','string', 'max:255'],
            'alamat_kementerian' => ['required','string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255']
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorAwam(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            'kad_pengenalan' => ['required', 'string', 'max:12', 'min:8'],
            'kerakyatan' => ['required'],
            'tarikh_lahir' => ['required', 'date'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'jenis_perniagaan' => ['required', 'string', 'max:255'],
            'alamat_kediaman' => ['required','string', 'max:255'],
            'poskod' => ['required','string', 'max:5', 'min:5'],
            'negeri' => ['required','string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255']
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorDalaman(array $data)
    {
        return Validator::make($data, [
            'kategori' => ['required'],
            'nama' => ['required', 'string', 'max:255'],
            // 'kad_pengenalan' => ['required', 'string', 'max:12'],
            // 'kerakyatan' => ['required'],
            // 'tarikh_lahir' => ['required', 'date'],
            // 'tempat_lahir' => ['required', 'string', 'max:255'],
            'jawatan' => ['required', 'string', 'max:255'],
            'no_tel_rumah' => ['required', 'string', 'max:12'],
            'no_tel_bimbit' => ['required', 'string', 'max:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'bahagian' => ['required','string', 'max:255'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function statusPerlaksanaan(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonan = Permohonan::get();

      return view('permohonan.statusPerlaksanaan', compact('listPermohonan','userInfo'));
    }

    public function laporan1(){
      $user_id = Auth::user()->id;

      $userInfo = User::findOrFail($user_id);

      $listPermohonan = Permohonan::get();

      return view('laporan.laporan-1', compact('listPermohonan','userInfo'));
    }

    public function laporan1_tapis(Request $request){
      // dd($request->all());
      $user_id = Auth::user()->id;

      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);


      if($request->select_tarikh == "permohonan"){
        $userInfo = User::findOrFail($user_id);

        $listPermohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->get();
      }else {
        $userInfo = User::findOrFail($user_id);

        $listPermohonan = Permohonan::where('tarikh_ketua_pengarah', '>', $tarikh_mula.' 00:00:00')->where('tarikh_ketua_pengarah', '<', $tarikh_akhir.' 23:59:59')->get();
      }
      return view('laporan.laporan-1-tapis', compact('listPermohonan','userInfo'));
    }

    public function laporan3(){

      $data_permohonan = DataPermohonan::get();

      return view('laporan.laporan-3', compact('data_permohonan'));
    }

    public function laporan3_tapis(Request $request){
      // dd($request->all());
      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      // $data_permohonan =  DataPermohonan::whereHas('permohonan', function ($query) {
      //     return $query->where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59');
      // })->get();

      $data_permohonan = DataPermohonan::where('created_at', '>', $tarikh_mula.' 00:00:00')->where('created_at', '<', $tarikh_akhir.' 23:59:59')->get();

      return view('laporan.laporan-3-tapis', compact('data_permohonan'));
    }

    public function laporan4(){

      $permohonan = Permohonan::get();

      return view('laporan.laporan-4', compact('permohonan'));
    }

    public function laporan4_tapis(Request $request){
      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      $permohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->get();

      return view('laporan.laporan-4', compact('permohonan'));
    }

    public function laporan5(){

      $permohonan = Permohonan::where('status_permohonan', 'Lulus')->get();

      return view('laporan.laporan-5', compact('permohonan'));
    }

    public function laporan5_tapis(Request $request){
      // dd($request->all());
      $user_id = Auth::user()->id;

      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);


      if($request->select_tarikh == "permohonan"){
        $permohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Lulus')->get();
      }else {
        $permohonan = Permohonan::where('tarikh_ketua_pengarah', '>', $tarikh_mula.' 00:00:00')->where('tarikh_ketua_pengarah', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Lulus')->get();
      }
      return view('laporan.laporan-5-tapis', compact('permohonan',));
    }

    public function laporan6(){

      $permohonan = Permohonan::where('status_permohonan', 'Gagal')->get();

      return view('laporan.laporan-6', compact('permohonan'));
    }

    public function laporan6_tapis(Request $request){
      // dd($request->all());
      $user_id = Auth::user()->id;

      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);


      if($request->select_tarikh == "permohonan"){
        $permohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Gagal')->get();
      }else {
        $permohonan = Permohonan::where('tarikh_ketua_pengarah', '>', $tarikh_mula.' 00:00:00')->where('tarikh_ketua_pengarah', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Gagal')->get();
      }
      return view('laporan.laporan-6-tapis', compact('permohonan',));
    }

    public function laporan7(){

      $permohonan = Permohonan::where('status_permohonan', 'Tidak Berkaitan')->get();

      return view('laporan.laporan-7', compact('permohonan'));
    }

    public function laporan7_tapis(Request $request){

      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      $permohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Tidak Berkaitan')->get();

      return view('laporan.laporan-7-tapis', compact('permohonan'));
    }

    public function laporan8(){

      $permohonan = Permohonan::where('status_permohonan', 'Batal')->get();

      return view('laporan.laporan-8', compact('permohonan'));
    }

    public function laporan8_tapis(Request $request){

      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      $permohonan = Permohonan::where('tarikh_permohonan', '>', $tarikh_mula.' 00:00:00')->where('tarikh_permohonan', '<', $tarikh_akhir.' 23:59:59')->where('status_permohonan', 'Batal')->get();

      return view('laporan.laporan-8-tapis', compact('permohonan'));
    }
}

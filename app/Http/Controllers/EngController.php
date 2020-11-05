<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\Document;
use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;
use App\Pengumuman;


use Storage;


use App\SenaraiEmail;
use App\Events\NewNotification;

use App\Notifications\Admin\PermohonanBaruAdmin;
use App\Notifications\Admin\PermohonanBaruAdminNull;
use App\Notifications\Admin\PermohonanBatalAdmin;
use App\Notifications\Admin\PermohonanMuatNaikResitAdmin;

use App\Notifications\User\PermohonanBaruUser;

use Illuminate\Support\Facades\Hash;


use Auth;

class EngController extends Controller
{
    public function viewRegisterEng(){
      return view('auth.register_eng');
    }

    public function viewLoginEng(){
      return view('auth.login_eng');
    }

    public function viewPasswordResetEng(){
      return view('auth.passwords.email_eng');
    }

    public function index()
    {
      $user_id = Auth::user()->id;
      $nama = User::find(1);
      $list = SenaraiHarga::where('status','Aktif')
                ->distinct()
                ->get();

      //dashboard counter

      $countPermohonanSedangProses = Permohonan::where('user_id', $user_id)
                                  ->where('status_permohonan', 'Sedang Diproses')
                                  ->count();

      $countPermohonanLulus = Permohonan::where('user_id', $user_id)
                                  ->where('status_permohonan', 'Lulus')
                                  ->whereNotNull('attachment_surat_bayaran')
                                  ->count();

      $countPermohonanGagal = Permohonan::where('user_id', $user_id)
                                  ->where('status_permohonan', 'Gagal')
                                  ->count();

      $countPermohonanTidakBerkaitan = Permohonan::where('user_id', $user_id)
                                  ->where('status_permohonan', 'Tidak Berkaitan')
                                  ->count();

      $countPermohonanBatal = Permohonan::where('user_id', $user_id)
                                  ->where('status_permohonan', 'Batal')
                                  ->count();

      $countPermohonanKeseluruhan = Permohonan::where('user_id', $user_id)
                                  ->count();

      $pengumuman = Pengumuman::where('status','1')->orderBy('created_at', 'DESC')->get();


        return view('user.mainMenu_eng', compact('list','countPermohonanSedangProses', 'countPermohonanLulus', 'countPermohonanGagal','countPermohonanKeseluruhan','pengumuman', 'countPermohonanTidakBerkaitan','countPermohonanBatal'));
    }

    public function add(){
      $jenisDokumen = SenaraiHarga::select('jenis_dokumen')->distinct()->get();

      //dd($jenisData);
      return view('user.add_eng', compact('jenisDokumen'));
    }

    public function edit($id){
      $info = Permohonan::findOrFail($id);
      $dataPilihan = DataPermohonan::where('permohonan_id', $id)->get();
      $jumlahdata = DataPermohonan::where('permohonan_id', $id)->count();
      $jenisDokumen = SenaraiHarga::select('jenis_dokumen')->distinct()->get();
      //dd($dataPilihan);

      $senaraiHarga = null;

      for($i = 0; $i < $jumlahdata; $i++){
        $senaraiHarga[$i] = SenaraiHarga::where('id',$dataPilihan[$i]->senarai_harga_id)->get();
      }
      //dd($dataPilihan);


      //$senaraiHarga = SenaraiHarga::get();
      //dd($senaraiHarga[0][0]);
      // $i=0;
      // foreach ($senaraiHarga[1] as $data) {
      //   dd($data);
      //   $i++;
      // }
      //dd($data);
      return view('user.edit_eng', compact('info','dataPilihan','jenisDokumen','jumlahdata','senaraiHarga'));
    }

    public function viewListSedangDiproses(){
      $user_id = Auth::user()->id;

      $listSedangDiproses = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Sedang Diproses')
                ->get();

      return view('user.listSedangDiproses_eng', compact('listSedangDiproses'));
    }

    public function list(){
      $user_id = Auth::user()->id;
      $list = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Sedang Diproses')
                ->get();

      $list_lulus = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Lulus')
                ->whereNotNull('attachment_surat_bayaran')
                ->get();

      // dd($list_lulus);

      $list_gagal = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Gagal')
                ->get();

      return view('user.list_eng', compact('list','list_lulus','list_gagal'));
    }

    public function viewListGagal(){
      $user_id = Auth::user()->id;

      $list_gagal = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Gagal')
                ->whereNotNull('remarks_admin')
                ->get();

      return view('user.listGagal_eng', compact('list_gagal'));
    }

    public function viewListTidakBerkaitan(){
      $user_id = Auth::user()->id;

      $list_tidak_berkaitan = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Tidak Berkaitan')
                ->get();

      return view('user.listTidakBerkaitan_eng', compact('list_tidak_berkaitan'));
    }

    public function viewListBatal(){
      $user_id = Auth::user()->id;

      $list_batal = Permohonan::where('user_id','=',$user_id)
                ->where('status_permohonan','Batal')
                ->get();

      return view('user.listBatal_eng', compact('list_batal'));
    }

    public function editProfil(){
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);

      return view('user.profil.edit_eng',compact('user'));
    }

    public function changePassUser(){
      $user_id = Auth::user()->id;
      $user = User::findOrFail($user_id);

      return view('user.profil.changePass_eng',compact('user'));
    }

}

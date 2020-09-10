<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;

use App\Permohonan;
use App\User;
use App\SenaraiHarga;
use App\DataPermohonan;
use App\SenaraiSurat;
use Storage;

use App\Mail\User\EmailNotifikasiLinkPermohonan;
use Illuminate\Support\Facades\Mail;

use App\SenaraiEmail;
use App\Notifications\Admin\PermohonanBaruAdmin;
use App\Notifications\Admin\PermohonanBaruAdminNull;
use App\Notifications\Admin\PermohonanLulusAdmin;
use App\Notifications\Admin\PermohonanLulusAdminNull;

use Auth;
use PDF;

use App\Jobs\SendEmailNotifikasiLinkPermohonan;
use App\Jobs\SendEmailPermohonanLulusAdmin;
use App\Jobs\SendEmailPermohonanLulusAdminNull;
use App\Jobs\SendEmailPermohonanBaruAdmin;


class PermohonanController extends Controller
{
  public function hargaPermohonan($id){
    // dd($id);
    $permohonan = Permohonan::findorfail($id);
    // dd($permohonan);
    $dataPermohonan = DataPermohonan::where('permohonan_id',$id)
                        ->get();
    $count_data_permohonan = DataPermohonan::where('permohonan_id', $id)->count();

    $i = 0;
    // dd($count_data_permohonan);
    foreach ($dataPermohonan as $value) {
      $senaraiHargaUser[$i] = SenaraiHarga::where('id', $value->senarai_harga_id)->get();
      $i++;
    }

    // dd($senaraiHargaUser);
    // dd($senaraiHargaUser[0][0]['negeri']);

    // dd($dataPermohonan);


    //$senaraiHargaId = $permohonan->senarai_harga_id;
    //$harga = SenaraiHarga::findorfail($senaraiHargaId);
    //dd($harga);
    //dd($permohonan);
    return view('permohonan.harga.view', compact('dataPermohonan', 'senaraiHargaUser','permohonan','count_data_permohonan','id'));
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          //'saiz_data[]' => ['required','numeric'],
          //'saiz_data' => ['required','numeric'],
          'harga_lain' => ['nullable', 'numeric'],


      ]);
  }

  public function updateHarga($id, Request $request){
    $this->validator($request->all())->validate();
    // dd($request->all());

    $test = $request->all();
    // dd($test);
    $countData = count($request->saiz_data);

    //calculate total price for all data
    $jumlah = 0.00;
    for ($i = 0; $i < $countData; $i++) {
      //dd($test['harga_asas'][0]) ;
      //$jumlah = $jumlah + $test['saiz_data'];
      $jumlah = $jumlah + ($test['harga_asas'][$i] * $test['saiz_data'][$i]);
    }

    //add harga tambahan into jumlah
    if(isset($request->harga_lain)){
      $jumlah = $jumlah + $request->harga_lain;

    }else {
      $request->merge(['harga_lain' => 0.00]);
    }

    $catatan_harga = $request->catatan_harga;

    if($catatan_harga == null){
      $catatan_harga = "Tiada";
    }



    for ($x = 0; $x < $countData; $x++){
      $dataPermohonan = DataPermohonan::findOrFail($test['id_data_permohonan'][$x]);

      $dataPermohonan->saiz_data = $test['saiz_data'][$x];

      $data_total = 0.00;

      $data_total = $test['harga_asas'][$x] * $test['saiz_data'][$x];

      $dataPermohonan->jumlah_harga_data = $data_total;

      $dataPermohonan->save();
    }

    //update data into DB
    $permohonan = Permohonan::findOrFail($id);

    $permohonan->jumlah_bayaran = $jumlah;

    $permohonan->harga_tambahan = $request->harga_lain;

    $permohonan->catatan_harga = $catatan_harga;


    $permohonan->save();

    //route to next page
     return $this->viewInformasiPermohonan($id)->with('success','Harga permohonan telah ditambah');
  }

  public function downloadAoi($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_aoi);
  }

  public function downloadSuratPermohonan($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_permohonan);
  }

  public function updateStatusPembayaran(Request $request){

    //dd($request->all());

    $permohonan = Permohonan::findOrFail($request->permohonan_id);

    $permohonan->status_pembayaran = $request->status_pembayaran;

    $permohonan->save();

    if($request->status_pembayaran == 'Perlu Dibayar'){
      $surat = SenaraiSurat::where('status_pembayaran', '=', 'bayaran')->first();
      if(is_null($surat))
      {
        return redirect()->route('senarai-surat.add')->with('success','Status pembayaran telah dikemaskini');
      }
      else{
        return view('permohonan.surat',  compact('surat'))->with('success','Status pembayaran telah dikemaskini');
      }
    }
    elseif ($request->status_pembayaran == 'Pengecualian Bayaran') {
      $surat = SenaraiSurat::where('status_pembayaran', '=', 'pengecualian_bayaran')->first();
      if(is_null($surat))
      {
        return redirect()->route('senarai-surat.add')->with('success','Status pembayaran telah dikemaskini');
      }
      else{
        return view('permohonan.surat',  compact('surat'))->with('success','Status pembayaran telah dikemaskini');
      }
    }else {
      return redirect()->route('permohonan.list')->with('success','Status pembayaran telah dikemaskini');
    }
  }

  public function updateUlasan($id, Request $request){
    // dd($request->all());
    $user_id = Auth::user()->id;
    $current_user_info = User::findOrFail($user_id);
    //dd($current_user_info->role);

    $permohonan = Permohonan::findOrFail($id);

    $permohonan->ulasan_admin = $request->ulasan_admin;

    $permohonan->ulasan_penyokong_1 = $request->ulasan_penyokong1;

    $permohonan->ulasan_penyokong_2 = $request->ulasan_penyokong2;

    $permohonan->ulasan_ketua_pengarah = $request->ulasan_ketua_pengarah;

    if($current_user_info->role == 3){
      $permohonan->status_permohonan = $request->status_permohonan;
      if($request->status_permohonan == 'Lulus'){
        $permohonan->status_pembayaran = $request->status_pembayaran;
      }
    }

    $permohonan->save();
    if($current_user_info->role == 0){
      $penyokong_satu = User::where('role','=','1')->get();
      // dd($penyokong_satu);
      $email = SenaraiEmail::where('kepada', '=', 'penyokong_1')->where('jenis', '=', 'permohonan_baru')->first();
      if(is_null($email))
      {
        foreach ($penyokong_satu as $data) {
          $permohonan->notify(new PermohonanBaruAdminNull($data));  // use this notification when email template not available
        }
      }
      else
      {
        foreach ($penyokong_satu as $data) {
          $permohonan->notify(new PermohonanBaruAdmin($data, $email));
        }
      }
    }
    if($current_user_info->role == 1){
      $penyokong_dua = User::where('role','=','2')->get();

      $email = SenaraiEmail::where('kepada', '=', 'penyokong_2')->where('jenis', '=', 'permohonan_baru')->first();
      if(is_null($email))
      {
        foreach ($penyokong_dua as $data) {
          $permohonan->notify(new PermohonanBaruAdminNull($data));  // use this notification when email template not available
        }
      }
      else
      {
        foreach ($penyokong_dua as $data) {
          $permohonan->notify(new PermohonanBaruAdmin($data, $email));
        }
      }
    }
    if($current_user_info->role == 2){
      $ketua_pengarah = User::where('role','=','3')->get();

      $email = SenaraiEmail::where('kepada', '=', 'ketua_pengarah')->where('jenis', '=', 'permohonan_baru')->first();
      if(is_null($email))
      {
        foreach ($ketua_pengarah as $data) {
          $permohonan->notify(new PermohonanBaruAdminNull($data));  // use this notification when email template not available
        }
      }
      else
      {
        foreach ($ketua_pengarah as $data) {
          $permohonan->notify(new PermohonanBaruAdmin($data, $email));
        }
      }
    }

    if($current_user_info->role == 3){
      $admin = User::where('role','=','0')->get();


      $permohonan->status_permohonan = "Lulus";

      // have not done yet 15/7/2020 -luke-
      $email = SenaraiEmail::where('kepada', '=', 'admin')->where('jenis', '=', 'permohonan_lulus')->first();
      if(is_null($email))
      {
        foreach ($admin as $data) {
          $permohonan->notify(new PermohonanLulusAdminNull($data));  // use this notification when email template not available
          // $emailJob = (new SendEmailPermohonanLulusAdminNull($data))->delay(Carbon::now()->addSeconds(30));
          // dispatch($emailJob);
        }
      }
      else
      {
        foreach ($admin as $data) {
          $permohonan->notify(new PermohonanLulusAdmin($data, $email));
          // $emailJob = (new SendEmailPermohonanLulusAdmin($data,$email))->delay(Carbon::now()->addSeconds(30));
          // dispatch($emailJob);

        }
      }


    }
    // return app('App\Http\Controllers\HomeController')->senaraiPermohonan();
    return redirect()->route('permohonan.listBaru')->with('success','Permohonan telah dikemaskini');
  }

  public function viewInformasiPermohonan($id){
      $permohonan = Permohonan::findorfail($id);
      $loop =  Permohonan::findorfail($id)->count();
      $user = User::where('id', $permohonan->user_id )->first();
      $permohonan_id = $permohonan['id'];
      // dd($permohonan_id);

      //current user id
      $user_id = Auth::user()->id;
      $current_user_info = User::findOrFail($user_id);
      //dd($current_user_info);

      //fetch data list

      $dataPermohonan = DataPermohonan::where('permohonan_id',$id)->get();
      $count_data_permohonan = DataPermohonan::where('permohonan_id',$id)->count();
      $i = 0;
      foreach ($dataPermohonan as $value) {

        $senaraiHargaUser[$i] = SenaraiHarga::where('id', $value->senarai_harga_id)->get();
        $i++;
      }

      // dd($permohonan);
      return view('permohonan.view',  compact('dataPermohonan','loop','user','current_user_info','senaraiHargaUser','count_data_permohonan','permohonan_id','permohonan'));
  }


  public function uploadSuratBayaran(Request $request){
    // dd($request->all());

    $uploaded_files_permohonan_surat_pembayaran =  $request->file('attachment_surat_bayaran')->store('uploads/surat_bayaran');
    $uploaded_files_permohonan_penerimaan_data =  $request->file('attachment_penerimaan_data')->store('uploads/surat_penerimaan_data');


    $permohonan_id = $request->permohonan_id_upload_surat_bayaran;
    $permohonan = Permohonan::findOrFail($permohonan_id);
    $permohonan->attachment_surat_bayaran = $uploaded_files_permohonan_surat_pembayaran;
    $permohonan->attachment_penerimaan_data = $uploaded_files_permohonan_penerimaan_data;
    $permohonan->save();

    return redirect()->route('permohonan.list')->with('success','Fail telah dimuatnaik');
  }

  public function uploadLinkData(Request $request){
    //dd($request->all());
    //upload file



    //update file location in db
    $permohonan_id = $request->permohonan_id_link_data;
    $permohonan = Permohonan::findOrFail($permohonan_id);
    $permohonan->link_data = $request->link_data;
    $permohonan->save();
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);


    // Mail::send(new EmailNotifikasiLinkPermohonan($permohonan,$user));

    $emailJob = (new SendEmailNotifikasiLinkPermohonan($permohonan,$user))->delay(Carbon::now()->addSeconds(30));
    dispatch($emailJob);

    return redirect()->route('permohonan.list')->with('success','Fail telah dimuatnaik');
  }

  public function printSurat(Request $request){
    // $surat = SenaraiSurat::find($id);
    // dd($surat->kandungan);
    // dd($request->all());
    $pagebreak = '<p><!-- pagebreak --></p>';
    $span_pagebreak = '<span style="page-break-before: always;"></span>';
    // dd(substr_count($surat->kandungan, $pagebreak));
    $surat_baru = str_replace($pagebreak,$span_pagebreak,$request->kandungan);
    // $excerpt = substr($surat->kandungan, 0, strpos($surat->kandungan, $pagebreak));
    // dd($test);
    $pdf = PDF::loadView('senarai-surat.pdf', compact(['surat_baru']))->setPaper('a4');
    // $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');
    // $pdf = PDF::loadHTML($surat->kandungan)->setPaper('a4');
    $content = $pdf->download()->getOriginalContent();
    Storage::put('public/surat/surat-' . $request->nombor_rujukan . '.pdf',$content);
    // return $pdf->stream();
    return $pdf->download('surat-' . $request->nombor_rujukan . '.pdf');

    // return redirect()->route('permohonan.list');
  }

  public function downloadResitPembayaran($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_receipt_pembayaran);
  }

  public function downloadSuratPenerimaanDataUser($id){
    $permohonan = Permohonan::findOrFail($id);
    return Storage::download($permohonan->attachment_penerimaan_data_user);
  }

  public function viewSebabGagal($id){

    $permohonan_id = $id;

    return view('permohonan.alasanGagal',  compact('permohonan_id'));

  }

  public function submitSebabGagal($id, Request $request){
    $permohonan = Permohonan::findOrFail($id);

    $permohonan->remarks_admin = $request->sebab_gagal;

    $permohonan->save();

    return redirect()->route('permohonan.listGagal')->with('success','Sebab permohonan gagal telah dihantar');
  }

  public function updateStatusTidakBerkaitan($id){

    $status = "Tidak Berkaitan";

    $permohonan = Permohonan::findOrFail($id);

    $permohonan->status_permohonan = $status;

    $permohonan->save();

    return redirect()->route('permohonan.listBaru')->with('success','Status permohonan berjaya dikemaskini');
  }

}

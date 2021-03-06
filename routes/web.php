<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|By Artanis Cloud Sdn Bhd
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('home');
});
// Route::get('/', function () {
//   if((auth()->user()->role == 5)){
//     Route::get('/halaman-utama', 'UserController@index')->name('user.mainMenu');
//   }
//   else {
//     Route::get('/home', 'HomeController@index')->name('home');
//   }
// });
Auth::routes();
Route::get('/password/resets/{token}/{email}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/notifikasi/baca/{id}', 'HomeController@redirectNotification')->name('notification.mark-as-read');

//English Language Pages
Route::get('/register/eng', 'EngController@viewRegisterEng')->name('auth.register_eng');

Route::get('/login/eng', 'EngController@viewLoginEng')->name('auth.login_eng');

Route::get('/passwords/reset/eng', 'EngController@viewPasswordResetEng')->name('auth.passwords.email_eng');



Route::middleware('admin')->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');

  Route::get('/home/chart/pie/jenis_data_dipohon_mengikut negeri', 'HomeController@getDataPieChart')->name('chart.pie.jenis_data_negeri');

  Route::get('/home/profil/kata-laluan/tukar', 'HomeController@changePassAdmin')->name('profil-admins.changePass');

  Route::post('/home/profil/kata-laluan/update', 'HomeController@updatePassAdmin')->name('profil-admins.updatePass');

  Route::get('/home/profil/edit', 'HomeController@editProfil')->name('profil-admins.editProfil');

  Route::post('/home/profil/update', 'HomeController@updateProfil')->name('profil-admins.updateProfil');

  #route for Permohonan
  Route::get('/permohonan/maklumat/{id}', 'PermohonanController@viewInformasiPermohonan')->name('permohonan.view');

  Route::get('/permohonan/harga/{id}', 'PermohonanController@hargaPermohonan')->name('permohonan.harga.view');

  Route::get('/permohonan/senarai/baru', 'HomeController@senaraiPermohonanBaru')->name('permohonan.listBaru');

  Route::get('/permohonan/senarai/sedang-diproses', 'HomeController@senaraiPermohonanSedangDiproses')->name('permohonan.listSedangDiproses');

  Route::get('/permohonan/senarai/gagal', 'HomeController@senaraiPermohonanGagal')->name('permohonan.listGagal');

  Route::get('/permohonan/senarai/tidak-berkaitan', 'HomeController@senaraiPermohonanTidakBerkaitan')->name('permohonan.listTidakBerkaitan');

  Route::get('/permohonan/senarai/batal', 'HomeController@senaraiPermohonanBatal')->name('permohonan.listBatal');

  Route::get('/permohonan/senarai/dalaman', 'HomeController@senaraiPermohonanDalaman')->name('permohonan.listDalaman');

  Route::get('/permohonan/senarai/semua', 'HomeController@senaraiPermohonan')->name('permohonan.list');

  Route::post('/permohonan/updateHarga/{id}', 'PermohonanController@updateHarga')->name('permohonan.harga.update');

  Route::post('/permohonan/tidak-berkaitan/{id}', 'PermohonanController@updateStatusTidakBerkaitan')->name('permohonan.update.tidakBerkaitan');

  Route::get('/permohonan/download/attachment_aoi/{id}', 'PermohonanController@downloadAoi')->name('permohonan.download.attachment_aoi');

  Route::post('/permohonan/updateStatusBayaran', 'PermohonanController@updateStatusPembayaran')->name('permohonan.statusPembayaran.update');

  Route::post('/permohonan/updateUlasan/{id}', 'PermohonanController@updateUlasan')->name('permohonan.ulasan.update');

  Route::post('/permohonan/print/', 'PermohonanController@printSurat')->name('permohonan.print');

  Route::get('/permohonan/download/attachment_permohonan/{id}', 'PermohonanController@downloadSuratPermohonan')->name('permohonan.download.surat_permohonan');

  Route::post('/permohonan/upload/surat_bayaran', 'PermohonanController@uploadSuratBayaran')->name('permohonan.upload.surat_bayaran');

  Route::post('/permohonan/upload/dokumen_dan_link_data', 'PermohonanController@uploadLinkData')->name('permohonan.upload.link_data');

  Route::get('/permohonan/download/attachment_receipt_pembayaran/{id}', 'PermohonanController@downloadResitPembayaran')->name('permohonan.download.attachment_receipt_pembayaran');

  Route::get('/permohonan/download/attachment_penerimaan_data_user/{id}', 'PermohonanController@downloadSuratPenerimaanDataUser')->name('permohonan.download.attachment_penerimaan_data_user');

  Route::get('/permohonan/sebabGagal/{id}', 'PermohonanController@viewSebabGagal')->name('permohonan.alasanGagal');

  Route::post('/permohonan/sebabGagal/update/', 'PermohonanController@submitSebabGagal')->name('permohonan.submitAlasan');




  #route for Senarai Harga
  Route::get('/harga/senarai', 'HomeController@senaraiHarga')->name('senarai-harga.list');

  Route::get('/harga/tambah', 'SenaraiHargaController@tambahHarga')->name('senarai-harga.add');

  Route::get('/harga/edit/{id}', 'SenaraiHargaController@editHarga')->name('senarai-harga.edit');

  Route::post('/harga/insert', 'SenaraiHargaController@insertHarga')->name('senarai-harga.insert');

  Route::post('/harga/update/{id}', 'SenaraiHargaController@updateHarga')->name('senarai-harga.update');

  Route::get('/harga/delete/{id}','SenaraiHargaController@deleteHarga')->name('senarai-harga.delete');

  #route for Senarai Surat
  Route::get('/surat/senarai', 'SenaraiSuratController@view')->name('senarai-surat.list');

  Route::get('/surat/tambah', 'SenaraiSuratController@create')->name('senarai-surat.add');

  Route::get('/surat/edit/{id}', 'SenaraiSuratController@edit')->name('senarai-surat.edit');

  Route::post('/surat/update/{id}', 'SenaraiSuratController@updateSurat')->name('senarai-surat.update');

  Route::get('/surat/print/{id}', 'SenaraiSuratController@print')->name('senarai-surat.print');

  Route::get('/surat/delete/{id}', 'SenaraiSuratController@delete')->name('senarai-surat.delete');

  Route::post('/surat/submit', 'SenaraiSuratController@submitForm')->name('senarai-surat.submit');

  #route for Senarai Surat
  Route::get('/pengumuman/tambah', 'PengumumanController@viewAdd')->name('pengumuman.add');

  Route::post('/pengumuman/submit', 'PengumumanController@submit')->name('pengumuman.submit');

  Route::get('/pengumuman/senarai', 'PengumumanController@list')->name('pengumuman.list');

  Route::get('/pengumuman/edit/{id}', 'PengumumanController@edit')->name('pengumuman.edit');

  Route::get('/pengumuman/delete/{id}', 'PengumumanController@delete')->name('pengumuman.delete');


  #route for super admin
  Route::get('/status-perlaksanaan/senarai', 'HomeController@statusPerlaksanaan')->name('permohonan.statusPerlaksanaan');

  #route for laporan
  Route::get('/laporan/bilangan-keseluruhan-permohonan', 'HomeController@laporan1')->name('laporan.laporan-1');

  Route::post('/laporan/bilangan-keseluruhan-permohonan-tapis', 'HomeController@laporan1_tapis')->name('laporan.laporan-1-tapis');

  Route::get('/laporan/bilangan-permohonan-mengikut-kategori-pemohon', 'HomeController@laporan2')->name('laporan.laporan-2');

  Route::post('/laporan/bilangan-permohonan-mengikut-kategori-pemohon-tapis', 'HomeController@laporan2_tapis')->name('laporan.laporan-2-tapis');

  Route::get('/laporan/bilangan-mengikut-kategori-data', 'HomeController@laporan3')->name('laporan.laporan-3');

  Route::post('/laporan/bilangan-mengikut-kategori-data-tapis', 'HomeController@laporan3_tapis')->name('laporan.laporan-3-tapis');

  Route::get('/laporan/bilangan-mengikut-status-permohonan', 'HomeController@laporan4')->name('laporan.laporan-4');

  Route::post('/laporan/bilangan-mengikut-status-permohonan-tapis', 'HomeController@laporan4_tapis')->name('laporan.laporan-4-tapis');

  Route::get('/laporan/bilangan-mengikut-kategori-permohonan-diluluskan', 'HomeController@laporan5')->name('laporan.laporan-5');

  Route::post('/laporan/bilangan-mengikut-kategori-permohonan-diluluskan-tapis', 'HomeController@laporan5_tapis')->name('laporan.laporan-5-tapis');

  Route::get('/laporan/bilangan-mengikut-kategori-permohonan-tidak-diluluskan', 'HomeController@laporan6')->name('laporan.laporan-6');

  Route::post('/laporan/bilangan-mengikut-kategori-permohonan-tidak-diluluskan-tapis', 'HomeController@laporan6_tapis')->name('laporan.laporan-6-tapis');

  Route::get('/laporan/bilangan-mengikut-kategori-permohonan-tidak-berkaitan', 'HomeController@laporan7')->name('laporan.laporan-7');

  Route::post('/laporan/bilangan-mengikut-kategori-permohonan-tidak-berkaitan-tapis', 'HomeController@laporan7_tapis')->name('laporan.laporan-7-tapis');

  Route::get('/laporan/bilangan-mengikut-kategori-permohonan-batal', 'HomeController@laporan8')->name('laporan.laporan-8');

  Route::post('/laporan/bilangan-mengikut-kategori-permohonan-batal-tapis', 'HomeController@laporan8_tapis')->name('laporan.laporan-8-tapis');





  #route for super admin
  Route::get('/pengguna/senarai/admin', 'AdminController@list')->name('superadmin.list');

  Route::get('/pengguna/senarai/luar', 'AdminController@listLuar')->name('superadmin.listPenggunaLuar');

  Route::get('/pengguna/tambah', 'AdminController@create')->name('superadmin.add');

  Route::get('/pengguna/edit/{id}', 'AdminController@edit')->name('superadmin.edit');

  Route::post('/pengguna/update/{id}', 'AdminController@updateUser')->name('superadmin.update');

  Route::get('/pengguna/delete/{id}','AdminController@delete')->name('superadmin.delete');

  Route::post('/pengguna/submit', 'AdminController@submitForm')->name('superadmin.submit');

  Route::get('/audit-trail', 'AdminController@auditTrail')->name('superadmin.auditTrail');

  Route::post('/audit-trail/filter', 'AdminController@auditTrailFilter')->name('superadmin.auditTrailFilter');

  Route::get('/audit-trail-user', 'AdminController@auditTrailLogUser')->name('superadmin.auditTrailLogUser');

  Route::post('/audit-trail-user/filter', 'AdminController@auditTrailLogUserFilter')->name('superadmin.auditTrailLogUserFilter');

  #route for Senarai Email
  Route::get('/email/senarai', 'SenaraiEmailController@view')->name('senarai-email.list');

  Route::get('/email/tambah', 'SenaraiEmailController@create')->name('senarai-email.add');

  Route::get('/email/edit/{id}', 'SenaraiEmailController@edit')->name('senarai-email.edit');

  Route::post('/email/update/{id}', 'SenaraiEmailController@updateSurat')->name('senarai-email.update');

  Route::get('/email/delete/{id}', 'SenaraiEmailController@delete')->name('senarai-email.delete');

  Route::post('/email/submit', 'SenaraiEmailController@submitForm')->name('senarai-email.submit');

});

Route::middleware('user')->group(function () {
  #normal user route
  Route::get('/halaman-utama', 'UserController@index')->name('user.mainMenu');

  Route::get('/main-menu', 'EngController@index')->name('user.mainMenu_eng');

  Route::get('/permohonan/user/senarai/sedang-diproses', 'UserController@viewListSedangDiproses')->name('user.listSedangDiproses');

  Route::get('/application/user/list/in-processing', 'EngController@viewListSedangDiproses')->name('user.listSedangDiproses_eng');

  Route::get('/permohonan/user/senarai/lulus', 'UserController@list')->name('user.list');

  Route::get('/application/user/list/passed', 'EngController@list')->name('user.list_eng');

  Route::get('/permohonan/user/senarai/gagal', 'UserController@viewListGagal')->name('user.listGagal');

  Route::get('/application/user/list/failed', 'EngController@viewListGagal')->name('user.listGagal_eng');

  Route::get('/permohonan/user/senarai/tidak-berkaitan', 'UserController@viewListTidakBerkaitan')->name('user.listTidakBerkaitan');

  Route::get('/application/user/list/unrelated', 'EngController@viewListTidakBerkaitan')->name('user.listTidakBerkaitan_eng');

  Route::get('/permohonan/user/senarai/batal', 'UserController@viewListBatal')->name('user.listBatal');

  Route::get('/application/user/list/cancel', 'EngController@viewListBatal')->name('user.listBatal_eng');

  Route::get('/permohonan/baru', 'UserController@add')->name('user.add');

  Route::get('/application/new', 'EngController@add')->name('user.add_eng');

  Route::get('/permohonan/jenisdata/{data}', 'UserController@getJenisData')->name('user.jenisdata');

  Route::get('/permohonan/tahun/{data}/and/{dokumen}', 'UserController@getTahun')->name('user.tahun');

  Route::get('/permohonan/kategoriData/{data}/and/{dokumen}', 'UserController@getKategoriData')->name('user.kategoriData');

  Route::get('/permohonan/negeri/{data}/and/{dokumen}/tahun/{tahun}', 'UserController@getNegeriFromTahun')->name('user.negeriTahun');

  Route::get('/permohonan/negeri/{data}/and/{dokumen}/kategoriData/{kategori}', 'UserController@getNegeriFromKategoriData')->name('user.negeriKategoriData');

  Route::get('/permohonan/custom/negeri/{data}/and/{dokumen}', 'UserController@getCustomNegeri')->name('user.customNegeri');

  Route::get('/permohonan/jenisKertas/{data}/and/{dokumen}/and/{tahun}/and/{negeri}/tahun', 'UserController@getJenisKertasFromTahun')->name('user.tahunKategoriData');

  Route::get('/permohonan/jenisKertas/{data}/and/{dokumen}/and/{kategori}/and/{negeri}/kategori_data', 'UserController@getJenisKertasFromKategoriData')->name('user.jenisKertasKategoriData');

  Route::get('/permohonan/custom/jenisKertas/{data}/and/{dokumen}/and/{negeri}', 'UserController@getCustomJenisKertas')->name('user.customJenisKertas');

  Route::get('/permohonan/fetchSenaraiHargaIdByTahun/jenisDokumen/{jenis_dokumen}/jenisData/{jenis_data}/tahun/{tahun}/negeri/{negeri}/jenisKertas/{kertas}', 'UserController@getSenaraiHargaIdByTahun');

  Route::get('/permohonan/fetchSenaraiHargaIdByKategoriData/jenisDokumen/{jenis_dokumen}/jenisData/{jenis_data}/kategoriData/{kategoriData}/negeri/{negeri}/jenisKertas/{kertas}', 'UserController@getSenaraiHargaIdByKategoriData');

  Route::get('/permohonan/fetchSenaraiHargaIdCustom/jenisDokumen/{jenis_dokumen}/jenisData/{jenis_data}/jenisKertas/{kertas}/negeri/{negeri}', 'UserController@getSenaraiHargaIdCustom');

  Route::post('/permohonan/submit', 'UserController@submitForm')->name('user.submit');

  Route::get('/permohonan/edit/{id}', 'UserController@edit')->name('user.edit');

  Route::get('/application/edit/{id}', 'EngController@edit')->name('user.edit_eng');

  Route::post('/permohonan/update/{id}', 'UserController@updatePermohonan')->name('user.update');

  Route::get('/permohonan/batal/{id}', 'UserController@batal')->name('user.batal');

  Route::get('/profil/edit', 'UserController@editProfil')->name('user.profil.edit');

  Route::get('/profil/edit/eng', 'EngController@editProfil')->name('user.profil.edit_eng');

  Route::post('/profile/update', 'UserController@updateProfil')->name('user.profil.updatePengguna');

  Route::post('/upload/resit_pembayaran', 'UserController@uploadResitPembayaran')->name('user.upload.resit_pembayaran');

  Route::post('/upload/surat_penerimaan_data', 'UserController@uploadPenerimaanData')->name('user.upload.surat_penerimaan_data');

  Route::get('/profil/tukar_kata_laluan', 'UserController@changePassUser')->name('user.profil.katalaluan');

  Route::get('/profile/change-password', 'EngController@changePassUser')->name('user.profile.password');

  Route::post('/profile/tukar_kata_laluan/update', 'UserController@updatePass')->name('user.profil.updatePassword');

  Route::get('/permohonan/user/download/surat_bayaran/{id}', 'UserController@downloadSuratBayaran')->name('user.download.surat_bayaran');

  Route::get('/permohonan/user/download/surat_penerimaan_data/{id}', 'UserController@downloadSuratPenerimaanData')->name('user.download.surat_penerimaan_data');

  Route::get('/permohonan/user/download/surat_tidak_lulus/{id}', 'UserController@downloadSuratTidakLulus')->name('user.download.surat_tidak_lulus');

});
// Route::resource('senaraiHargas', 'SenaraiHargaController');

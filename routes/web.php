<?php

use Illuminate\Support\Facades\Route;

/*
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
    return view('welcome');
});

Auth::routes();


Route::middleware('admin')->group(function () {
  Route::get('/home', 'HomeController@index')->name('home');

  #route for Permohonan
  Route::get('/permohonan/maklumat/{id}', 'PermohonanController@viewInformasiPermohonan')->name('permohonan.view');

  Route::get('/permohonan/harga/{id}', 'PermohonanController@hargaPermohonan')->name('permohonan.harga.view');

  Route::get('/permohonan/senarai/semua', 'HomeController@senaraiPermohonan')->name('permohonan.list');

  Route::post('/permohonan/updateHarga/{id}', 'PermohonanController@updateHarga')->name('permohonan.harga.update');

  Route::post('/permohonan/updateUlasan/{id}', 'PermohonanController@updateUlasan')->name('permohonan.ulasan.update');

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

  Route::post('/surat/submit', 'SenaraiSuratController@submitForm')->name('senarai-surat.submit');

  #route for super admin
  Route::get('/pengguna/senarai', 'AdminController@list')->name('superadmin.list');

  Route::get('/pengguna/tambah', 'AdminController@create')->name('superadmin.add');

  Route::get('/pengguna/edit/{id}', 'AdminController@edit')->name('superadmin.edit');

  Route::post('/pengguna/update/{id}', 'AdminController@updateUser')->name('superadmin.update');

  Route::get('/pengguna/delete/{id}','AdminController@delete')->name('superadmin.delete');


  Route::get('/audit-trail', 'AdminController@auditTrail')->name('superadmin.auditTrail');



});

Route::middleware('user')->group(function () {
  #normal user route
  Route::get('/halaman-utama', 'UserController@index')->name('user.mainMenu');

  Route::get('/permohonan/senarai', 'UserController@list')->name('user.list');

  Route::get('/permohonan/baru', 'UserController@add')->name('user.add');

  Route::get('/permohonan/jenisdata/{data}', 'UserController@getJenisData')->name('user.jenisdata');

  Route::get('/permohonan/tahun/{data}', 'UserController@getTahun')->name('user.tahun');

  Route::get('/permohonan/kategoriData/{data}/and/{dokumen}', 'UserController@getKategoriData')->name('user.kategoriData');

  Route::get('/permohonan/negeri/{data}/and/{dokumen}/tahun/{tahun}', 'UserController@getNegeriFromTahun')->name('user.negeriTahun');

  Route::get('/permohonan/negeri/{data}/and/{dokumen}/kategoriData/{kategori}', 'UserController@getNegeriFromKategoriData')->name('user.negeriKategoriData');

  Route::get('/permohonan/fetchSenaraiHargaIdByTahun/jenisDokumen/{jenis_dokumen}/jenisData/{jenis_data}/tahun/{tahun}/negeri/{negeri}', 'UserController@getSenaraiHargaIdByTahun');

  Route::get('/permohonan/fetchSenaraiHargaIdByKategoriData/jenisDokumen/{jenis_dokumen}/jenisData/{jenis_data}/kategoriData/{kategori_data}/negeri/{negeri}', 'UserController@getSenaraiHargaIdByKategoriData');

  Route::post('/permohonan/submit', 'UserController@submitForm')->name('user.submit');

  Route::get('/permohonan/edit/{id}', 'UserController@edit')->name('user.edit');

  Route::post('/permohonan/update/{id}', 'UserController@updatePermohonan')->name('user.update');
});
// Route::resource('senaraiHargas', 'SenaraiHargaController');

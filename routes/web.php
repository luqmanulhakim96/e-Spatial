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

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');

//PEMOHONAN

Route::get('/permohonan/maklumat', 'HomeController@viewInformasiPemohon')->name('permohonan.view');

Route::get('/permohonan/senarai', 'HomeController@senaraiPemohon')->name('permohonan.list');

//HARGA

Route::get('/harga/senarai', 'HomeController@senaraiHarga')->name('senarai-harga.list');

Route::get('/harga/tambah', 'SenaraiHargaController@tambahHarga')->name('senarai-harga.add');

Route::get('/harga/edit/{id}', 'SenaraiHargaController@editHarga')->name('senarai-harga.edit');

Route::post('/harga/insert', 'SenaraiHargaController@insertHarga')->name('senarai-harga.insert');

Route::post('/harga/update/{id}', 'SenaraiHargaController@updateHarga')->name('senarai-harga.update');

Route::get('/harga/delete/{id}','SenaraiHargaController@deleteHarga')->name('senarai-harga.delete');


#normal user route

Route::get('/halaman-utama', 'UserController@index')->name('user.halaman-utama');

Route::get('/senarai', 'UserController@list')->name('user.senaraiPemohonan');

Route::get('/permohonan/baru', 'UserController@viewPermohonanBaru')->name('user.permohonanBaru');

Route::post('/permohonan/insert', 'UserController@add')->name('user.add');

// Route::resource('senaraiHargas', 'SenaraiHargaController');

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/permohonan', 'HomeController@viewInformasiPemohon')->name('permohonan.view');

Route::get('/permohon/senarai', 'HomeController@senaraiPemohon')->name('permohonan.list');

Route::get('/harga/senarai', 'HomeController@senaraiHarga')->name('senarai-harga.list');

Route::get('/harga/tambah', 'SenaraiHargaController@tambahHarga')->name('senarai-harga.add');

Route::get('/harga/edit/{id}', 'SenaraiHargaController@editHarga')->name('senarai-harga.edit');

Route::post('/harga/insert', 'SenaraiHargaController@insertHarga')->name('senarai-harga.insert');

Route::post('/harga/update/{id}', 'SenaraiHargaController@updateHarga')->name('senarai-harga.update');

Route::get('/harga/delete/{id}','SenaraiHargaController@deleteHarga')->name('senarai-harga.delete');


// Route::resource('senaraiHargas', 'SenaraiHargaController');

<?php

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

Route::get('/', 'SiteController@index');
Route::get('/tentang', 'SiteController@tentang');
Route::get('/kontak', 'SiteController@kontak');
Route::get('/kendaraan', 'SiteController@kendaraan');
Route::get('/booking', 'SiteController@booking');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/mobil', 'MobilController@index');
    Route::post('/mobil/create', 'MobilController@create');
    Route::get('/mobil/{id}/edit', 'MobilController@edit');
    Route::post('/mobil/{id}/update', 'MobilController@update');
    Route::get('/mobil/{id}/delete', 'MobilController@delete');

    Route::get('/supir', 'SupirController@index');  
    Route::post('/supir/create', 'SupirController@create');
    Route::get('/supir/{id}/edit', 'SupirController@edit');
    Route::post('/supir/{id}/update', 'SupirController@update');
    Route::get('/supir/{id}/delete', 'SupirController@delete');

    Route::get('/pelanggan', 'PelangganController@index');  
    Route::post('/pelanggan/create', 'PelangganController@create');
    Route::get('/pelanggan/{id}/edit', 'PelangganController@edit');
    Route::post('/pelanggan/{id}/update', 'PelangganController@update');
    Route::get('/pelanggan/{id}/delete', 'PelangganController@delete');

    Route::get('/transaksi', 'TransaksiController@index');  
    Route::post('/transaksi/create', 'TransaksiController@create');
    Route::get('/transaksi/{id}/edit', 'TransaksiController@edit');
    Route::post('/transaksi/{id}/update', 'TransaksiController@update');
    Route::get('/transaksi/{id}/delete', 'TransaksiController@delete');

    Route::get('/pesanan', 'PesananController@index');
    Route::post('/pesanan/create', 'PesananController@create');
    Route::get('/pesanan/{id}/delete', 'PesananController@delete');
});


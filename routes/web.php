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

Route::get('/', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware'=> ['auth', 'checkRole:admin']], function(){
	//Kasir
	Route::get('/kasir', 'KasirController@index');
	Route::get('/kasir/tambah', 'KasirController@create');
	Route::post('/postkasir', 'KasirController@store');
	Route::get('/kasir/{id}/edit', 'KasirController@edit');
	Route::post('/kasir/{id}/update', 'KasirController@update');
	Route::get('kasir/{id}/delete', 'KasirController@delete');
	
	//Paket
	Route::get('/paket', 'PaketController@index');
	Route::get('/paket/tambah', 'PaketController@create');
	Route::post('/postpaket', 'PaketController@store');
	Route::get('/paket/{id}/edit', 'PaketController@edit');
	Route::post('/paket/{id}/update', 'PaketController@update');
	Route::get('/paket/{id}/delete', 'PaketController@delete');

	//Member
	Route::get('/member/{id}/edit', 'MemberController@edit');
	Route::post('/member/{id}/update', 'MemberController@update');
	Route::get('/member/{id}/delete', 'MemberController@delete');

	//Outlet
	Route::get('/outlet', 'OutletController@index');
	Route::get('/outlet/tambah', 'OutletController@create');
	Route::post('/postoutlet', 'OutletController@store');
	Route::get('/outlet/{id}/edit', 'OutletController@edit');
	Route::post('/outlet/{id}/update', 'OutletController@update');
	Route::get('/outlet/{id}/delete', 'OutletController@delete');

	//Owner
	Route::get('/owner', 'OwnerController@index');
	Route::get('/owner/tambah', 'OwnerController@create');
	Route::post('/postowner', 'OwnerController@store');
	Route::get('/owner/{id}/edit', 'OwnerController@edit');
	Route::post('/owner/{id}/update', 'OwnerController@update');
	Route::Get('owner/{id}/delete', 'OwnerController@delete');
});

Route::group(['middleware'=> ['auth', 'checkRole:kasir,admin']], function(){
	Route::get('dashboard','KasirController@dashboard');

	//Pilih Paket
	Route::get('/pilihpaket', 'PilihController@index');

	//Keranjang
	Route::get('/keranjang', 'KeranjangController@index');
	Route::post('/postkeranjang', 'KeranjangController@store');
	Route::get('/keranjang/{id}/delete', 'KeranjangController@delete');
	Route::get('/keranjang/{id}/edit', 'KeranjangController@edit');
	Route::post('/keranjang/{id}/update', 'KeranjangController@update');

	//Transaksi
	Route::get('/transaksi', 'TransaksiController@index');
	Route::post('/transaksi/dibayar/{id}', 'TransaksiController@dibayar');
	Route::post('/posttransaksi', 'TransaksiController@store');
	Route::post('/konfirmasi/selesai/{id}', 'TransaksiController@proses');
	Route::post('/konfirmasi/selesai/{id}/selesai', 'TransaksiController@selesai');
	Route::post('/konfirmasi/selesai/{id}/diambil', 'TransaksiController@diambil');
	Route::post('/pajak/{id}', 'TransaksiController@pajak');
	Route::post('/diskon/{id}', 'TransaksiController@diskon');
	Route::post('/biaya_tambahan/{id}', 'TransaksiController@biaya_tambahan');
	Route::post('/total/{id}', 'TransaksiController@total');

	//Data Member
	Route::get('/member', 'MemberController@index');
	Route::get('/member/tambah', 'MemberController@create');
	Route::post('/postmember', 'MemberController@store');
	Route::get('/member/{id}/paket', 'MemberController@index');
});

Route::group(['middleware'=> ['auth', 'checkRole:admin,kasir,owner']], function(){
	Route::get('/dashboard', 'KasirController@dashboard');
	Route::get('/datatransaksi', 'TransaksiController@datatransaksi');
	Route::get('/transaksi/exportpdf', 'TransaksiController@exportPdf');
});
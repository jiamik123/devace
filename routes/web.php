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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beli_bahan', 'create@belibahan')->name('transaksi');
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/home', function () {
    return view('home');
});
// Route::get('/home2', function () {
// //     return view('home2');
// });
Route::get('/petugas', function () {
    return view('petugas');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home2','create@home2')->name('home2');
Route::post('/beli_bahan','create@Transaksis')->name('keranjang');
// Route::get('/beli_bahan','create@belibahan')->name('keranjang_2');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/createpetugas','create@create_petugas')->name('create_petugas');
Route::get('/admin','create@index');
Route::post('/create','create@create')->name('create');
Route::get('/delete/{id}','create@delete');
Route::get('/delete_2/{id}','create@delete_2');
Route::get('/edit/{barang}','create@edit')->name('edit');
Route::post('/edit/update/{id}','create@update')->name('update');
Route::get('/editcart/{id}','create@edit_2')->name('edit_cart');
Route::post('/editcart/update_2/{id}','create@update_2')->name('update_2');
Route::post('/bayar','create@bayar')->name('bayar_cart');

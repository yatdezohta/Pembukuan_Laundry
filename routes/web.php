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

Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/login', 'AdminController@login');
Route::get('/Customer', 'AdminController@Customer');
Route::get('/CustomerTambah', 'AdminController@CustomerTambah');
Route::get('/CustomerEdit', 'AdminController@CustomerEdit');
Route::get('/Transaksi', 'AdminController@Transaksi');
Route::get('/TransaksiEdit', 'AdminController@TransaksiEdit');
Route::get('/TransaksiTambah', 'AdminController@TransaksiTambah');
Route::get('/Pengeluaran', 'AdminController@Pengeluaran');
Route::get('/PengeluaranEdit', 'AdminController@PengeluaranEdit');
Route::get('/PengeluaranTambah', 'AdminController@PengeluaranTambah');
Route::get('/Laporan', 'AdminController@Laporan');

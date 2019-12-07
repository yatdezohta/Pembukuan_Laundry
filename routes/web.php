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
    return redirect(route('login'));
});

Auth::routes();
// route::get('/login', function(){
//   return view('auth.login');
// })->name('login');
// Route::get('/dashboard', 'AdminController@dashboard');
// Route::post('/login', 'HomeController@login');
// Route::get('/logout', 'HomeController@logout');

// Route::get('/Customer', 'AdminController@Customer');
// Route::get('/CustomerTambah', 'AdminController@CustomerTambah');
// Route::get('/CustomerEdit', 'AdminController@CustomerEdit');
// Route::get('/Transaksi', 'AdminController@Transaksi');
// Route::get('/TransaksiEdit', 'AdminController@TransaksiEdit');
// Route::get('/TransaksiTambah', 'AdminController@TransaksiTambah');
// Route::get('/Pengeluaran', 'AdminController@Pengeluaran');
// Route::get('/PengeluaranEdit', 'AdminController@PengeluaranEdit');
// Route::get('/PengeluaranTambah', 'AdminController@PengeluaranTambah');
// Route::get('/User', 'AdminController@User');
// Route::get('/UserEdit', 'AdminController@UserEdit');
// Route::get('/UserTambah', 'AdminController@UserTambah');
// Route::get('/Laundry', 'AdminController@Laundry');
// Route::get('/LaundryEdit', 'AdminController@LaundryEdit');
// Route::get('/LaundryTambah', 'AdminController@LaundryTambah');
// Route::get('/Tipe', 'AdminController@Tipe');
// Route::get('/TipeEdit', 'AdminController@TipeEdit');
// Route::get('/TipeTambah', 'AdminController@TipeTambah');
// Route::get('/Laporan', 'AdminController@Laporan');
Route::get('home', 'HomeController@index');
Route::middleware(['Role:admin'])->group(function() {
  Route::get('Cust', 'CustomerController@index')->name('Cust.index');
  Route::get('Cust/create', 'CustomerController@create')->name('Cust.create');
  Route::post('Cust', 'CustomerController@store')->name('Cust.store');
  Route::get('Cust/{Cust}', 'CustomerController@show')->name('Cust.show');
  Route::get('Cust/{Cust}/edit', 'CustomerController@edit')->name('Cust.edit');
  Route::put('Cust/{Cust}', 'CustomerController@update')->name('Cust.update');
  Route::delete('Cust/{Cust}', 'CustomerController@destroy')->name('Cust.destroy');



});

Route::resource('LapMasuk', 'LaporanMasukController');// baru
Route::resource('LapKeluar', 'LaporanKeluarController');// baru
Route::resource('Transaksi', 'TransaksiController');
Route::resource('Pengeluaran', 'PengeluaranController');
Route::resource('Laundry', 'LaundryController');
Route::resource('Tipe', 'TipeController');
// Route::resource('User', 'UserController')->middleware('Role');
// Route::resource('Cust', 'CustomerController');

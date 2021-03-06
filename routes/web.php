<?php
use App\Http\Middleware\sarkom;
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
    return view('page.index');
});
Route::get('/test', function () {
	return '<h1 align="center" style="margin-top:200px;">Serangan Mendadak,Main Kotor Curangi Saya</h1>';
});

Route::get('/nama/{sarkom}','testpagecontroller@sarkom')->middleware('sarkom');

Route::get('/index', function(){
	return view('page.index');
})->name('index');

Route::resource('/siswa', 'siswacontroller');
ROute::resource('mapel', 'mapelcontroller');

Route::resource('piket','piketcontroller');
Route::resource('/kelas','kelascontroller');

Route::resource('/absensi','absensicontroller');

Route::resource('/indexresource', 'testpagecontrollerApi');


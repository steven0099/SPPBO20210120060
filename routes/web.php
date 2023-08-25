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
    return redirect()->to('/login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//tambahkan kode berikut
Route::resource('barang', App\Http\Controllers\BarangController::class);

Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);

Route::get('/cari', [App\Http\Controllers\PeminjamanController::class, 'cari']);

Route::get('/welcome', [App\Http\Controllers\BerandaController::class, 'index']);

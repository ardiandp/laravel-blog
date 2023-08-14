<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArtikelController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\SiswaController;

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
    return view('beranda');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/contoh', function () {
    return view('layout/tengah');
});

Route::resource('post', \App\Http\Controllers\PostController::class); // tambahkan ini
//Route::get('artikel', 'ArtikelController@index')->name('artikel.index');
Route::get('artikel', [ArtikelController::class, 'index'])->name('artikel.index');

Route::get('artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');




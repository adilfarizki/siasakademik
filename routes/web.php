<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
// siswa
Route::get('/siswa/index', [SiswaController::class,'index']);
Route::get('/siswa/tambah', [SiswaController::class,'tambah']);
Route::post('/siswa/store', [SiswaController::class,'store']);
Route::get('/siswa/edit', [SiswaController::class,'edit']);

// kelas
Route::get('/kelas/index', [KelasController::class,'index'])->name('kelas.index');
Route::get('/kelas/tambah', [KelasController::class,'tambah']);
Route::post('/kelas/store', [KelasController::class,'store'])->name('kelas.store');
Route::get('/kelas/edit/{id}', [KelasController::class,'edit'])->name('kelas.edit');
Route::put('/kelas/update/{id}', [KelasController::class,'update'])->name('kelas.update');
Route::delete('/kelas/hapus/{id}', [KelasController::class,'hapus'])->name('kelas.hapus');




Route::get('penjual', function () { return view('penjual'); })->middleware(['checkRole:penjual,admin']);




Route::get('pembeli', function () { return view('pembeli'); })->middleware(['checkRole:pembeli,admin']);

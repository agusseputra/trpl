<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Doctrine\DBAL\Schema\Index;
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

// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/',[HomeController::class,'index'])->name('landing');
Route::get('/kurikulum',[HomeController::class,'kurikulum'])->name('kurikulum');
Route::get('/pengajar',[HomeController::class,'pengajar'])->name('pengajar');
Route::get('/kompetensi',[HomeController::class,'kompetensi'])->name('kompetensi');
Route::get('/karir',[HomeController::class,'karir'])->name('karir');

Route::get('/berita/{slug}',[BeritaController::class,'detail'])->name('berita');
// Route::get('/berita',[BeritaController::class,'index'])->name('berita');
Route::get('/kategori/{id}',[BeritaController::class,'kategori'])->name('kategori');

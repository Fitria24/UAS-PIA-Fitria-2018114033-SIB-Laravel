<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamankerjaController;
use App\Http\Controllers\KontakController;

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
route::get('/home',[HomeController::class,'index'])->name('home');

route::get('/data-profile',[ProfileController::class,'index'])->name('data-profile');
route::get('/create-profile',[ProfileController::class,'create'])->name('create-profile');
Route::post('/simpan-profile',[ProfileController::class,'store'])->name('simpan-profile');
Route::get('/edit-profile/{id}',[ProfileController::class,'edit'])->name('edit-profile');
Route::post('/update-profile/{id}',[ProfileController::class,'update'])->name('update-profile');
Route::get('/delete-profile/{id}',[ProfileController::class,'destroy'])->name('delete-profile');

route::get('/data-pendidikan',[PendidikanController::class,'index'])->name('data-pendidikan');
route::get('/create-pendidikan',[PendidikanController::class,'create'])->name('create-pendidikan');
Route::post('/simpan-pendidikan',[PendidikanController::class,'store'])->name('simpan-pendidikan');
Route::get('/edit-pendidikan/{id}',[PendidikanController::class,'edit'])->name('edit-pendidikan');
Route::post('/update-pendidikan/{id}',[PendidikanController::class,'update'])->name('update-pendidikan');
Route::get('/delete-pendidikan/{id}',[PendidikanController::class,'destroy'])->name('delete-pendidikan');

route::get('/data-pengalaman',[PengalamankerjaController::class,'index'])->name('data-pengalaman');
route::get('/create-pengalaman',[PengalamankerjaController::class,'create'])->name('create-pengalaman');
Route::post('/simpan-pengalaman',[PengalamankerjaController::class,'store'])->name('simpan-pengalaman');
Route::get('/edit-pengalaman/{id}',[PengalamankerjaController::class,'edit'])->name('edit-pengalaman');
Route::post('/update-pengalaman/{id}',[PengalamankerjaController::class,'update'])->name('update-pengalaman');
Route::get('/delete-pengalaman/{id}',[PengalamankerjaController::class,'destroy'])->name('delete-pengalaman');

route::get('/data-kontak',[KontakController::class,'index'])->name('data-kontak');
route::get('/create-kontak',[KontakController::class,'create'])->name('create-kontak');
Route::post('/simpan-kontak',[KontakController::class,'store'])->name('simpan-kontak');
Route::get('/edit-kontak/{id}',[KontakController::class,'edit'])->name('edit-kontak');
Route::post('/update-kontak/{id}',[KontakController::class,'update'])->name('update-kontak');
Route::get('/delete-kontak/{id}',[KontakController::class,'destroy'])->name('delete-kontak');
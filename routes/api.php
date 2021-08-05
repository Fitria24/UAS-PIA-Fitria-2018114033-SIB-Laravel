<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PendidikanController;
use App\Http\Controllers\Api\PengalamankerjaController;
use App\Http\Controllers\Api\KontakController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('',[ProfileController::class, 'index']);


Route::resources([
    'profiles' => ProfileController::class,
    'pendidikans' => PendidikanController::class,
    'pengalamans' => PengalamankerjaController::class,
    'kontaks' => KontakController::class

]);
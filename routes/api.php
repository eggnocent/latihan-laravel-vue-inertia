<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DivisiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth.jwt'], function () {
    // Routes for Karyawan
    Route::get('karyawans', [KaryawanController::class, 'index']);
    Route::post('karyawans', [KaryawanController::class, 'store']);
    Route::get('karyawans/{id}', [KaryawanController::class, 'show']);
    Route::put('karyawans/{id}', [KaryawanController::class, 'update']);
    Route::delete('karyawans/{id}', [KaryawanController::class, 'destroy']);
    Route::get('karyawan-stats', [KaryawanController::class, 'stats']);

    // Routes for Pekerjaan
    Route::get('pekerjaans', [PekerjaanController::class, 'index']);
    Route::post('pekerjaans', [PekerjaanController::class, 'store']);
    Route::get('pekerjaans/{id}', [PekerjaanController::class, 'show']);
    Route::put('pekerjaans/{id}', [PekerjaanController::class, 'update']);
    Route::delete('pekerjaans/{id}', [PekerjaanController::class, 'destroy']);

    // Routes for Divisi
    Route::get('divisis', [DivisiController::class, 'index']);
    Route::post('divisis', [DivisiController::class, 'store']);
    Route::get('divisis/{id}', [DivisiController::class, 'show']);
    Route::put('divisis/{id}', [DivisiController::class, 'update']);
    Route::delete('divisis/{id}', [DivisiController::class, 'destroy']);
});

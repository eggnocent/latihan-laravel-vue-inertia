<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\DivisiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('karyawans', KaryawanController::class);
    Route::resource('pekerjaans', PekerjaanController::class);
    Route::resource('divisis', DivisiController::class);
});
Route::fallback(function () {
    return Inertia::render('NotFound'); // Pastikan Anda memiliki komponen NotFound.vue
});

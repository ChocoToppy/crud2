<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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

Route::get('input-mahasiswa', [MahasiswaController::class,'index']);
Route::post('kirim-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('delete-mahasiswa/{nim}',[MahasiswaController::class,'delete']);
Route::get('edit-mahasiswa/{nim}',[MahasiswaController::class,'edit']);
Route::get('show-data-mahasiswa',[MahasiswaController::class,'show']);
Route::post('update-mahasiswa/{nim}',[MahasiswaController::class,'update']);

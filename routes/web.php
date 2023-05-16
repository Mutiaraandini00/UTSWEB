<?php

use App\http\Controllers\HewanLangkaController;
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

Route::get('/', [HewanLangkaController::class, 'index']);
Route::get('/tambah', [HewanLangkaController::class, 'tambah']);
Route::post('/tambah', [HewanLangkaController::class, 'store']);
Route::get('/hapus/{id}', [HewanLangkaController::class, 'hapus']);
Route::get('/edit/{id}', [HewanLangkaController::class, 'edit']);
Route::post('/edit/{id}', [HewanLangkaController::class, 'update']);
Route::get('/lihat/{id}', [HewanLangkaController::class, 'lihat']);


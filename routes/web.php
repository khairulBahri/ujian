<?php

use App\Http\Controllers\BiodataPengunjungController;
use App\Models\BiodataPengunjung;
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
    return view('welcome');
});

Route::get('/biodata-pengunjung/create', [BiodataPengunjungController::class, 'create']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/biodata-pengunjung/show', [BiodataPengunjungController::class, 'show']);

Route::post('/biodata-pengunjung/store', [BiodataPengunjungController::class, 'store']);
Route::middleware(['auth'])->group(function () {
    Route::get('/biodata-pengunjung', [BiodataPengunjungController::class, 'index']);


    Route::get('/biodata-pengunjung/{id}/edit', [BiodataPengunjungController::class, 'edit']);
    Route::put('/biodata-pengunjung/{id}', [BiodataPengunjungController::class, 'update']);
    Route::delete('/biodata-pengunjung/{id}', [BiodataPengunjungController::class, 'destroy']);
    Route::get('/biodata-pengunjung/{id}/check', [BiodataPengunjungController::class, 'check']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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
    return view('photoai.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('photo-upload', [PhotoController::class,'photoAdd'])->name('photoAdd');
    Route::get('photo-list', [PhotoController::class,'photoList'])->name('photoList');
    Route::post('photo-store', [PhotoController::class,'photoStore'])->name('photoStore');
    Route::get('photo-download/{serial_no}', [PhotoController::class,'photoDownload'])->name('photoDownload');
    
});

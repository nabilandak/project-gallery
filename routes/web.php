<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostinganController;

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
    return view('index');
});
Route::get('/detail-foto', [PostinganController::class, 'detailFoto']);

Route::get('/category', function () {
    return view('layout/category');
});

Route::get('/category-detail', function () {
    return view('layout/category-detail');
});


Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register-proses', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function(){

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/edit-foto', function () {
        return view('layout/edit-foto');
    });
    Route::get('/edit-profile', function () {
        return view('layout/edit-profile');
    });
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/upload-foto', [PostinganController::class, 'form']);
    Route::post('/upload-foto-proses', [PostinganController::class, 'uploadFoto']);

    Route::get('/create-album', [AlbumController::class, 'index']);
    Route::post('/create-album-proses', [AlbumController::class, 'create']);
    
});





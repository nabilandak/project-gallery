<?php

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
    return view('index');
});
Route::get('/detail-foto', function () {
    return view('layout/detail-foto');
});
Route::get('/profile', function () {
    return view('layout/profile');
});
Route::get('/upload-foto', function () {
    return view('layout/upload-foto');
});

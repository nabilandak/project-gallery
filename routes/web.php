<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\LaporprofileController;
use App\Http\Controllers\LaporkomentarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------foto
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', [ExploreController::class, 'index']);
    Route::get('/category-detail/{id}', [KategoriController::class, 'index']);
    Route::get('/about',function(){
        return view('layout.about');
    });




    Route::get('/admin-login', [AdminController::class, 'indexLogin']);
    Route::post('/admin-login-proses', [AdminController::class, 'login']);

Route::middleware('isAdmin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin-dashboard-postingan', [AdminController::class, 'dashboardPostingan']);
    Route::get('/admin-detail-postingan/{id}', [AdminController::class, 'detailPostingan']);
    Route::get('/admin-delete-laporan/{id}', [AdminController::class, 'deleteLaporan']);
    Route::get('/admin-delete-postingan/{id}', [AdminController::class, 'deletePostingan']);
    
    Route::get('/admin-dashboard-komentar', [AdminController::class, 'dashboardKomentar']);
    Route::get('/admin-detail-komentar/{id}', [AdminController::class, 'detailKomentar']);
    Route::get('/admin-delete-komentar/{id}', [AdminController::class, 'deleteKomentar']);
    Route::get('/admin-delete-laporan-komentar/{id}', [AdminController::class, 'deleteLaporanKomentar']);
    
    Route::get('/admin-dashboard-kategori', [AdminController::class, 'dashboardKategori']);
    Route::get('/admin-upload-kategori', [AdminController::class, 'indexUpload']);
    Route::get('/admin-edit-kategori/{id}', [AdminController::class, 'editKategori']);
    Route::post('/admin-edit-kategori-proses/{id}', [AdminController::class, 'editKategoriProses']);
    Route::get('/admin-delete-kategori/{id}', [AdminController::class, 'hapusKategori']);
    Route::post('/admin-upload-kategori-proses', [AdminController::class, 'uploadKategori']);
    Route::get('/admin-logout', [AdminController::class, 'adminLogout']);

    Route::get('/admin-dashboard-profile', [AdminController::class, 'dashboardProfile']);
    Route::get('/admin-detail-profile/{id}', [AdminController::class, 'detailProfile']);
    Route::post('/admin-profile-update/{id}', [AdminController::class, 'updateProfile']);

    Route::get('/admin-dashboard-user', [AdminController::class, 'dashboardUser']);
    Route::get('/admin-dashboard-user-banned', [AdminController::class, 'dashboardUserBanned']);
        
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register-proses', [RegisterController::class, 'register']);
});

Route::middleware('isUser')->group(function(){

    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/detail-foto/{id}', [PostinganController::class, 'detailFoto']);
    Route::get('/edit-foto/{id}', [PostinganController::class, 'indexEdit']);
    Route::post('/edit-foto-proses/{id}', [PostinganController::class, 'update']);
    Route::get('/delete-foto-proses/{id}', [PostinganController::class, 'delete']);

    Route::post('/lapor-postingan', [LaporController::class, 'proses']);
    Route::get('/lapor-komentar/{id}', [LaporkomentarController::class, 'index']);
    Route::post('/lapor-komentar-proses/{id}', [LaporkomentarController::class, 'proses']);

    Route::post('/like-post/{postId}', [LikeController::class, 'like']);

    Route::post('/comment-post/{postId}',[KomentarController::class, 'insert']);
    Route::get('/comment-read/{id}',[KomentarController::class, 'read']);
    Route::get('/report-view/{id}',[KomentarController::class, 'show']);

    Route::get('/edit-profile/{id}', [ProfileController::class, 'indexEdit']);
    Route::post('/edit-profile-proses/{id}', [ProfileController::class, 'update']);
    Route::get('/edit-password/{id}', [ProfileController::class, 'indexPassword']);
    Route::post('/edit-password-proses', [ProfileController::class, 'updatePassword']);
    Route::get('/profile/{id}', [ProfileController::class, 'index']);
    Route::get('/profile-user/{id}', [ProfileController::class, 'showData']);
    Route::get('/lapor-profile/{id}', [LaporprofileController::class, 'index']);
    Route::post('/lapor-profile-proses/{id}', [LaporprofileController::class, 'proses']);

    Route::get('/detail-followers/{user:id}', [ProfileController::class, 'detailFollowers']);
    Route::get('/detail-following/{user:id}', [ProfileController::class, 'detailFollowing']);

    Route::post('/follow/user', [FollowController::class, 'store']);

    Route::get('/upload-foto', [PostinganController::class, 'form']);
    Route::post('/upload-foto-proses', [PostinganController::class, 'uploadFoto']);

    Route::get('/detail-album/{id}', [AlbumController::class, 'detailAlbum']);
    Route::get('/create-album', [AlbumController::class, 'index']);
    Route::post('/create-album-proses', [AlbumController::class, 'create']);
    Route::get('/edit-album/{id}', [AlbumController::class, 'indexEdit']);
    Route::post('/edit-album-proses/{id}', [AlbumController::class, 'editProses']);
    Route::get('/delete-album/{id}', [AlbumController::class, 'delete']);
    
});





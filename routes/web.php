<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
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

Route::get('/',[PostController::class,'index']);
Route::get('/read/{post:slug}',[PostController::class,'detail']);
Route::get('/kategori/{kategori:slug}',[KategoriController::class,'list']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kontak', [HomeController::class,'kontak']);
Route::get('/tentang', [HomeController::class,'tentang']);
Route::get('/author/{penulis:name}', [UserController::class,'user']);
Route::get('/login', [LoginController::class,'index'])->name('masuk')->middleware('guest');
Route::post('/login', [LoginController::class,'checklogin']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'save']);
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

//route untuk resource
Route::get('dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/ipku',function(){

	$ipp = geoip()->getLocation('182.1.221.95');

	return $ipp->toArray();
});



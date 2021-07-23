<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

Route::get('/kontak', function () {

    return view('kontak',[

        'aktif'  => 'active',
        'title' => 'Kontak'
    ]);
});

Route::get('/tentang', function () {

    return view('tentang',[
        'aktif'  => 'active',
        'title' => 'Tentang'
    ]);
});



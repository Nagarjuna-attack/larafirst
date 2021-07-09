<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

    return view('beranda',[
        
        'aktif'  => 'active',
        'title' => 'Beranda',
        'post' => Post::semua()
    ]);
});

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

Route::get('/read/{slug}', function($url){

    return view('read',[
        'title' => 'Single Post',
        'baca'  => Post::find($url)
    ]);
});

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

    $data = [
        'aktif'  => 'active'
        ];

    return view('beranda',$data);
});

Route::get('/kontak', function () {

    $data = [
        'aktif'  => 'active'
        ];
    return view('kontak');
});

Route::get('/tentang', function () {

    $data = [
        'aktif'  => 'active'
        ];
    return view('tentang');
});

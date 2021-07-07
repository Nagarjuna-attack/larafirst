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

    $blog = [

        [
          'judul' => 'Post pertama',
          'url' => 'post-pertama',
          'deskripsi' => 'Ini Adalah Post Pertama',
          'isi' => 'sdfasdf asdfa dfasdf asdfasd fasdf asdf asdf asdf asdf asdf asdf asd fsdf asdfasd fasd fasd fasdf sd asdf adf asdf ' 
        ],
        [
          'judul' => 'Post Kedua',
          'url' => 'post-kedua',
          'deskripsi' => 'Ini Adalah Post Kedua',
          'isi' => 'sdfasdf asdfa dfasdf asdfasd fasdf asdf asdf asdf asdf asdf asdf asd fsdf asdfasd fasd fasd fasdf sd asdf adf asdf '
        ]
    ];

    return view('beranda',[
        
        'aktif'  => 'active',
        'title' => 'Beranda',
        'post' => $blog
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

Route::get('/read/{slug}', function($slug){

    return view('read',[
        'title' => 'Single Post',
    ]);
});

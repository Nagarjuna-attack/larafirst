<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('beranda',[ 
        'aktif'  => 'active',
        'title' => 'Beranda',
        'posts' => Post::all()
        ]);
    }

    public function detail($url)
    {
        return view('read',[
        'title' => 'Single Post',
        'baca'  => Post::find($url)
        ]);
    }
}

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
        'posts' => Post::latest()->get(),
        ]);
    }

    public function detail(Post $post)
    {
        return view('read',[
        'title' => 'Single Post',
        'baca'  => $post
        ]);

    }
}

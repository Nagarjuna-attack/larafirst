<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Post

class Kategori extends Controller
{
    public function index(Kategori $kategori)
    {
        return view('kategori',[

            'title' => $kategori->name,
            'posts' => $kategori->post,
            'ktgori'=> $kategori->name
        ]);
    }
}

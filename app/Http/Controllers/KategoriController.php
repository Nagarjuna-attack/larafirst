<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Post;

class KategoriController extends Controller
{

    public function index()
    {
        return view('kategoris',[
            
            'title' => 'Kategori',
            'kategoris' => Kategori::all()
        ]);

    }


    public function list(Kategori $kategori)
    {
        return view('kategori',[

            'title' => $kategori->name,
            'posts' => $kategori->post,
            'ktgori'=> $kategori->name
        ]);
    }
}

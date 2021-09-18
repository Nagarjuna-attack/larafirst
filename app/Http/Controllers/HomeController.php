<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function kontak()
    {
        return view('kontak',[
            'title' => 'Kontak'
            ]);
    }

    public function tentang()
    {
        return view('tentang',[
            'title' => 'Tentang'
        ]);
    }
}

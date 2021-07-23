<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function kontak()
    {
        return view('kontak',[
            'aktif'  => 'active',
            'title' => 'Kontak'
            ]);
    }

    public function tentang()
    {
        return view('tentang',[
            'aktif'  => 'active',
            'title' => 'Tentang'
        ]);
    }
}

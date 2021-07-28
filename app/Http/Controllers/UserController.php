<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kategori;

class UserController extends Controller
{
    public function user(User $penulis)
    {
        return view('user',[

            'title'   => $penulis->name,
            'posts'   => $penulis->userPost,
            'penulis' => $penulis->name,
        ]);
    }
}

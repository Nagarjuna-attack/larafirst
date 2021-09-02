<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//call model
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',[
            
            'title' => 'Login',
        ]);
    }

    public function checklogin()
    {

    }
}

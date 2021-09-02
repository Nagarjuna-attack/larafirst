<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function checklogin(Request  $request)
    {
        $cek = $request->validate([

            'email'    => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($cek))
        {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('logError','<div class="alert text-center alert-warning alert-dismissible fade show" role="alert"><strong>Login Gagal!</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//call model
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            
            'title' => 'Register',
        ]);
    }

    public function save(Request $request)
    {
        $dataValid = $request->validate([
            'name'     => 'required|max:200',
            'email'    => ['required','email:dns','max:200','unique:users'],
            'password' => 'required|max:200|min:8',
        ]);

        $request->session()->flash('sukses', '<div class="alert text-center alert-success alert-dismissible fade show" role="alert">
          <strong>Registrasi Berhasil, Silahkan Login!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        
        $dataValid['password'] = Hash::make($dataValid['password']);
        User::create($dataValid);
        return redirect('/login');
    }
}

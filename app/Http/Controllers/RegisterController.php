<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama lengkap' => ['required'],
            'username' => ['required', 'min:3', 'max','unique:users'],
            'email' => 'required|email'|'unique:users',
            'alamat' => ['required'],
            'password' => 'required|min:5|max:255'
        ]);

        // $validateData['password'] = Hash::make($validateData['password']);

        // User::create($validateData);

        return redirect('/login')->with('berhasil', 'horray ! pendaftaran berhasil. sekarang, kamu lakukan login');
    }
}

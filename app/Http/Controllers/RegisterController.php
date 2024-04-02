<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => ['required', 'unique:App\Models\User,Username', 'max:255'],
            'password' => ['required', 'max:255', 'min:6'],
            'email' => ['required', 'email', 'unique:App\Models\User,Email'],
            'nama_lengkap' => ['required'],
            'alamat' => ['required']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}

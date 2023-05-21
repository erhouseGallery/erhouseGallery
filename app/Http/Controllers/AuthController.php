<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //login
    public function indexLogin() {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }






    // Register
    public function indexRegister() {
        return view('auth.regsiter', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'number' => 'required|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success','Registrasi berhasil, Silahkan Login!!');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Register
    public function indexRegister()
    {
        return view('auth.regsiter', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
{
    $validateData = $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email:dns|unique:users',
        'number' => 'required|max:255',
        'address' => 'required|max:255',
        'password' => 'required|min:5|max:255',
    ]);



    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $imageName = time() . '-' . $file->getClientOriginalName();
        $file->storeAs('image-profiles', $imageName);

        $validateData['avatar'] = $imageName;
    }

    $validateData['password'] = Hash::make($validateData['password']);
     User::create($validateData);

    return redirect('/login')->with('success', 'Registrasi berhasil, Silahkan Login!!');
}

    //login
    public function indexLogin()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard-admin');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    //logout
    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function indexProfile()
    {


        $user = auth()->user();
        return view('admin.profiles.index', [
            'title' => 'Dashboard Profile',
            'user' => $user
        ]);
    }

    public function editProfile(User $user)
    {

        $user = auth()->user();
        return view('admin.profiles.edit', [
            'title' => 'Dashboard Profile',
            'user' => $user
        ]);
    }


    public function updateProfile(Request $request, User $user)
    {

        $user = auth()->user();

        $rules = [
            'name' => 'required|min:3|max:255',
            'email' => 'required|max:255',
            'number' => 'required|max:255',
            'address' => 'required|max:255',
            'password' => 'nullable|min:5|max:255'

        ];

        $validateData = $request->validate($rules);


        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('image-profiles', $imageName);
            $validateData['avatar'] = $imageName;

            if ($user->avatar != null) {
                Storage::delete('image-profiles/' . $user->avatar);
            }

            $validateData['avatar'] = $imageName;
        }


        if (!empty($request->input('password'))) {
            $validateData['password'] = Hash::make($validateData['password']);
        } else {
            unset($validateData['password']);
        }



        User::where('id', $user->id)->update($validateData);

        return redirect('/admin/profiles')->with('success', 'data berhasil diupdate');
    }
}

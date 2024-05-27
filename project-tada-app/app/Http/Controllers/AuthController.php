<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function loginView()
    {
        return view('auth.login');
    }
    // Logic for Login
    function login(Request $request)
    {
        $input = [
            $request->phone,
            $request->password
        ];

        $request->validate([
            'phone' => 'required|alphanum
            |max:1',
            'password' => 'required|min:8'
        ]);

        $user = User::where('phone_number', $input[0])->where('password', $input[1])->first();
        if ($user) {
            $request->session()->put('user', $user);
            return redirect()->route('home');
        } else {
            return back()->with('status', 'Gagal');
            return redirect()->route('login')->with('error', 'Invalid Phone Number or Password');
        }
    }
    // Logic for Register

    function registerCreate(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->phone_number = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Registrasi Berhasil');
    }
}

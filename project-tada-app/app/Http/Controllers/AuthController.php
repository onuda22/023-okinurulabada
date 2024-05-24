<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function loginView()
    {
        return view('auth.login');
    }
    // Logic for Login
    // function login(Request $request){
    //     $request
    // }
    function registerView()
    {
        return view('auth.register');
    }
}
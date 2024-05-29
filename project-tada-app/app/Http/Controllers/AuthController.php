<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    // Logic for Login
    // Masih Perlu Perbaikan
    function loginAuth(Request $request)
    {
        $input = [
            $request->phone,
            $request->password
        ];

        $request->validate([
            'phone' => 'required',
            'password' => 'required|min:6'
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
    // -------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------

    function register()
    {
        return view('auth.register');
    }
    // Logic for Register

    function registerCreate(Request $request)
    {
        // Register Data Validation
        $request->validate([
            'name' => 'required|string|max=255',
            'phone' => 'required|string|max=255',
            'password' => 'required|string|min:6',
            'kampung' => 'required|string|max:255',
            'rt' => 'required|string|max:255',
            'rw' => 'required|string|max:255',
            'desakel' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kabkota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'id_role' => 'required|string|in:petani,pedagang'
        ]);

        // Map score role
        $roleValue = $request->role === 'petani' ? 1 : 2; // 1 = petani, 2 = pedagang

        // Grouping value for address
        $address = $request->kampung . ', RT.' . $request->rt . ', RW.' . $request->rw .
            ', Desa/Kel. ' . $request->desakel . ', Kec. ' . $request->kecamatan .
            ', Kab/Kota ' . $request->kabkota . ', ' . $request->provinsi;

        // Save data to database
        $user = new User();
        $user->id_role = $roleValue;
        $user->name = $request->name;
        $user->phone_number = $request->phone;
        $user->password = Hash::make($request->password);
        $user->address = $address;
        $user->save();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('login')->with('success', 'Akun Anda Berhasil Didaftarkan. Silahkan LogIn');
        // return back()->with('success', 'Akun Anda Berhasil Didaftarkan');
    }
}

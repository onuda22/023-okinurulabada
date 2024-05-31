<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    // Logic for Login
    public function loginAuth(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'password' => 'required|min:6'
        ], [
            'phone_number.required' => 'Nomor telepon selular harus diisi',
            'password.required' => 'Nomor HP Harus Diisi',
            'password.min' => 'Password harus diisi minimun 6 karakter'
        ]);

        $input = [
            $request->phone_number,
            $request->password
        ];


        // Cara 1
        $user = User::where('phone_number', $input[0])->first();
        if ($user) {
            $passwordCheck = Hash::check($input[1], $user->password);
            // dd($passwordCheck);
            if ($passwordCheck) {
                $request->session()->put('isLogged', true);
                $request->session()->put('user', $user);
                // $request->session()->put('userId', $user->id);
                // $request->session()->put('role', $user->id_role);
                if (session('user')['id_role'] == 2) {
                    return redirect()->route('products.index')->with('success', 'Selamat Datang Petani');
                }
                return redirect()->route('home')->with('success', 'Anda Telah Login');
            }
        } else {
            dd($user);
            return redirect()->route('login')->with('error', 'Invalid Phone Number or Password');
        }
    }

    public function tampilkanSession(Request $request)
    {
        if ($request->session()->has('user')) {
            echo $request->session()->get('user');
        } else {
            echo "Tidak Ada Data";
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('isLogged');
        $request->session()->forget('user');
        // session()->forget('userId');
        // session()->forget('role');

        return redirect()->route('login')->with('success', 'Anda Telah Logout');
    }
    // -------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------
    // -------------------------------------------------------------------------------------------------

    public function register()
    {
        return view('auth.register');
    }
    // Logic for Register

    public function registerCreate(Request $request)
    {
        // Register Data Validation
        $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            'kampung' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'desakel' => 'required|string',
            'kecamatan' => 'required|string',
            'kabkota' => 'required|string',
            'provinsi' => 'required|string',
            'role' => 'required|string|in:petani,pedagang'
        ], [
            'name.required' => 'Nama harus diisi',
            'phone_number.required' => 'Nomor telepon selular harus diisi',
            'phone_number.unique' => 'Nomor telepon sudah terdaftar, Mohon gunakan nomor yang lain',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password harus diisi minimun 6 karakter',
            'role.required' => 'Pekerjan harus diisi',
            'rt.required' => 'RT harus diisi',
            'rw.required' => 'RW harus diisi',
            'kampung.required' => 'Kampung harus diisi',
            'desakel.required' => 'Desa/Kelurahan harus diisi',
            'kecamatan.required' => 'Kecamatan harus diisi',
            'kabkota.required' => 'Kab/kota harus diisi',
            'provinsi.required' => 'Provinsi harus diisi',
        ]);

        // Map score role
        $roleValue = $request->role === 'petani' ? 1 : 2; // 1 = petani, 2 = pedagang

        // Grouping value for address
        $address = $request->kampung . ', RT.' . $request->rt . ', RW.' . $request->rw .
            ', Desa/Kel. ' . $request->desakel . ', Kec. ' . $request->kecamatan .
            ', Kab/Kota ' . $request->kabkota . ', ' . $request->provinsi;

        // Save data to database
        User::insert([
            'id_role' => $roleValue,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'address' => $address
        ]);

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('login')->with('success', 'Akun Anda Berhasil Didaftarkan. Silahkan LogIn');
    }
}

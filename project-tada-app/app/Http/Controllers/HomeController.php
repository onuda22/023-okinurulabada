<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product;
use App\Models\User;
//import Http Request
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home');
        $issues = DB::table('products')
            ->join('users', 'products.id_user', '=', 'users.id')
            ->select('products.*', 'users.name as user_name')
            ->get();
        return view('home', compact('issues'));
    }

    // public function select()
    // {
    //     // $products = Product::latest()->paginate(15);
    //     $issues = DB::table('products')
    //         ->join('users', 'products.id_user', '=', 'users.id')
    //         ->select('products.*', 'users.name as user_name')
    //         ->get();
    //     return view('home', compact('issues'));
    // }
}
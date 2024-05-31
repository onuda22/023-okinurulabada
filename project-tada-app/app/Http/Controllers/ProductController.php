<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        //get user id
        $user = session('user');
        if ($user['id_role'] === 2) {
            # code...
            //get all products on user_id
            $products = Product::where('id_user', $user['id'])->latest()->paginate(10);

            //render view with products
            return view('products.index', compact('products'));
        } else {
            return redirect()->route('home');
        }
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.productcreate');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5', //product_name
            'description'   => 'required|min:10', //desc
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric',
            'unit'          => 'required',
            'weight'        => 'required',
            'category'      => 'required'
        ]);
        //Get Id User
        $user_id = session('user')['id'];

        // Get Unit
        $unit = $request->unit . " " . $request->weight;

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create product
        Product::create([
            'id_user'       => $user_id,
            'image'         => $image->hashName(),
            'product_name'  => $request->title, //product_name
            'desc'          => $request->description, // desc
            'price'         => $request->price,
            'stock'         => $request->stock,
            'unit'          => $unit,
            'category'      => $request->category
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('products.show', compact('product'));
    }
}

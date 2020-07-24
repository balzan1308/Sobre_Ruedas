<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('active');
    }

    /**
     *
     *
     * @return \Illuminate\View\View
     */
    public function index(request $request):\Illuminate\View\View
    {
        $products = Product::active()
        ->name($request->input('filter.name'))
        ->paginate(1);
        return view('products.indexClient', compact('products'));
    }
}
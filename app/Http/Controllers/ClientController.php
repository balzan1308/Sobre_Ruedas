<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ClientController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\View\View
     */
    public function index(request $request):\Illuminate\View\View
    {
        $Category = Category::all();
        $products = Product::active()
        ->name($request->input('filter.name'))
        ->paginate(4);
        return view('store.index', compact('products'));
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $category =Category::find($id);
        $product=Product::find($id);
        return view('store.show', compact('product'), compact('category'));
    }
}

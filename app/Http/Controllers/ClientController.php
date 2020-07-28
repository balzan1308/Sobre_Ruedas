<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;

class ClientController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\View\View
     */
    public function index(request $request):\Illuminate\View\View
    {
        $category = Category::all();
        $products = Product::active()
        ->name($request->input('filter.name'))
        ->paginate(3);
        return view('store.index', compact('products'), compact('category'));
    }
       /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category =Category::find($id);
        $product=Product::find($id);
        return view('store.show', compact('product'), compact('category'));
    }
}

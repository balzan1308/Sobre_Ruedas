<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Product;
use App\Category;

class ClientController extends Controller
{
    /**
     * Undocumented function
     *
     * @param request $request
     * @return View
     */
    public function index(request $request): View
    {
        $Category = Category::all();
        $products = Product::active()
        ->name($request->input('filter.name'))
        ->paginate(4);
        return view('store.index', compact('products'));
    }
    /**
     * Undocumented function
     *
     * @param [type] $id
     * @return View
     */
    public function show($id): View
    {
        $category =Category::find($id);
        $product=Product::find($id);
        return view('store.show', compact('product'), compact('category'));
    }
}

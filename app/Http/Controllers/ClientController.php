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
     * @param Request $request
     * @return View
     */
    public function index(Request $request) :View
    {
        $category = $request->get('category', null);
        $name = $request->get('name', null);

        $this->products = new product();

        return view('store.index', ['products' => $this->products
                                    ->active()
                                    ->name($name)
                                    ->category($category)
                                    ->paginate(4),
            
            ]);
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

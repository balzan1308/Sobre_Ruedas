<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\View\View;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

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
        $cartProducts = \Cart::session(auth()->id())->getContent();
        $category = $request->get('category', null);
        $name = $request->get('name', null);

        $this->products = new product();

        return view('store.index', compact('cartProducts'),['products' => $this->products
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
        $cartProducts = \Cart::session(auth()->id())->getContent();
        $category =Category::find($id);
        $product=Product::find($id);
        return view('store.show',compact('cartProducts'),compact('product'), compact('category'));
    }
    
}

<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put ('cart', array());
    }

    public function show()
    {
       $cart = \Session::get('cart');
       return view('store.Cart', compact('cart'));
    }

    public function add(product  $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->name]= $product;
        \Session::put('cart', $cart);

        return redirect()->route('products/indexClient');
    }
    public function delete(product $product)
    {
        $cart= \Session::get ('cart');
        unset($cart[$product->name]);
        \Session::put('cart', $cart);

        return redirect()->route('products/indexClient');
    }
}

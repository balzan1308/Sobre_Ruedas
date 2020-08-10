<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
    {
        $product = product::find($id);
        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "stock" => 1,
                    "price" => $product->price,
                    "image" =>$product->image
                    ]
                ];

                session()->put('cart', $cart);

                return redirect()->back()->with('success', 'articulo added to cart succesfully');
            }

            if(isset($cart[$id])) {
                $cart[$id]["stock"]++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'articulo added to cart succesfully');
            }

            $cart[$id] = [
                "name" => $product->name,
                "stock" => 1,
                "price" => $product->price,
                "image" =>$product->image
            ];
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'articulo added to cart succesfully');
        
    }  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

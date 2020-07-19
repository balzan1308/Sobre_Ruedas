<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));

            $products = Product::where('name', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->paginate(6);
        return view('products.index', ['products' => $products, 'search' => $query]);
      
        }

        $products = Product::select('id', 'name', 'price', 'stock', 'image', 'url')->with('image:name')->get();

            //$ib = Articulos::find(3)->imagenesarticulos;
    
            //dd($ib);
    
            // $imagenes = Articulos::find(3)->imagenesaerticulos;
    
        return view('products.index', compact('articulos')); 
    }
    
}

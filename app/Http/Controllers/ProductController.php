<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('products.create', compact('category'));
    }
    /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
      public function store (Request $request)
      {
          if($request->hasFile('image')){
              $file = $request->file('image');
              $name = time().$file->getClientOriginalName();
              $file->move(public_path().'/images', $name);
          }
          $product = new product();
          $product->name = request('name');
          $product->category_id = $request->input('category_id');
          $product->price = request('price');
          $product->stock = request('stock');
          $product->description = request('description');
          $product->image = $name;
          $product->save();
          return redirect('/product');
  
      }
}

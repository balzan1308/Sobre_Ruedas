<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
        $this->middleware('active');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request):\Illuminate\View\View
    {
     $products = Product::name($request->input('filter.name'))->paginate(2);

     return view('products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image') )
        {
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
        return view('products.show', compact('product'), compact('category'));
    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $category = Category::all();
        return view('products.edit', compact('product'), compact('category'));
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(request $request, $id)
    {

        $products = Product::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images', $name);
            $products->image = $name;
        }

        $products->name = $request->input('name');
        $products->price = $request->input('price');
        $products->stock = $request->input('stock');
        $products->description = $request->input('description');
        $products->category_id = $request->input('category_id');
        $products->active = (!request()->has('active') == '1' ? '0' : '1');
        $products->save();
        return redirect(route('product.index')) ;
    }
}
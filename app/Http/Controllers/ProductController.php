<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Product;
use App\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('verified');
        $this->middleware('active');
        
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
     $products = Product::name($request->input('filter.name'))
     ->paginate(4);

     return view('products.index', compact('products'));
    }
    /**
     * Undocumented function
     *
     * @return View
     */
    public function create(): View
    {
        $category = Category::all();
        return view('products.create', compact('category'));
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
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
     * Undocumented function
     *
     * @param [type] $id
     * @return View
     */
    public function show($id): View
    {
        $category =Category::find($id);
        $product=Product::find($id);
        return view('products.show', compact('product'), compact('category'));
    }
    /**
     * Undocumented function
     *
     * @param Product $product
     * @return View
     */
    public function edit(Product $product): View
    {
        $category = Category::all();
        return view('products.edit', compact('product'), compact('category'));
    }
    /**
     * Undocumented function
     *
     * @param request $request
     * @param [type] $id
     * @return void
     */
    public function update(request $request, $id): RedirectResponse
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

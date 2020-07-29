<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=category::all();
        return view('categories.index',['categories'=>$categories]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
            $category= new category();
            $category->name =request('name');
            $category->slug =request('slug');
            $category->description =request('description');
            $category->save();

        return redirect('categories');
    }
}

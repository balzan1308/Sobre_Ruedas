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
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {

        $category=category::find($id);
            $category->name =request('name');
            $category->slug =request('slug');
            $category->description =request('description');
            $category->update();

        return redirect('categories');
    }
    
}

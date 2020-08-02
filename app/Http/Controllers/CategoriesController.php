<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Category;
use Illuminate\Http\RedirectResponse;

class CategoriesController extends Controller
{
    /**
     * Undocumented function
     *
     * @return View
     */
    public function index(): View
    {
        $categories=category::all();
        return view('categories.index',['categories'=>$categories]);     
    }
    /**
     * Undocumented function
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category): View
    {
        return view('categories.edit', compact('category'));
    }
    /**
     * Undocumented function
     *
     * @return view
     */
    public function create(): view
    {
        return view('categories.create');
    }
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
    {
            $category= new category();
            $category->name =request('name');
            $category->slug =request('slug');
            $category->description =request('description');
            $category->save();

        return redirect('categories');
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

        $category=category::find($id);
            $category->name =request('name');
            $category->slug =request('slug');
            $category->description =request('description');
            $category->update();

        return redirect('categories');
    }
    
}


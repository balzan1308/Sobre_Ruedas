<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=category::all();
        return view('categories.index',['categories'=>$categories]);
    }
}

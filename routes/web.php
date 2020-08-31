<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::bind('product', function ($name) {
    return App\Product::where('name', $name)->first();
});


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('users','UserController');
Route::resource('product', 'ProductController');
Route::resource('categories','CategoriesController');
Route::get('/', 'ClientController@index')->name('products/indexClient');
Route::get('/products/{id}', 'ClientController@show')->name('products/show');
Route::get('/cart', 'CartController@show')->name('cart/index')->middleware('auth');
Route::get('/cart/add/{product}', 'CartController@add')->name('cart/show')->middleware('auth');
Route::get('/cart/delete/{product}','CartController@delete')->name('cart/delete');

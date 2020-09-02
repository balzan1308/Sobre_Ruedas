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
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('users','UserController');

Route::resource('product', 'ProductController');

Route::resource('categories','CategoriesController');

Route::get('/', 'ClientController@index')->name('products/indexClient');
Route::get('/products/{id}', 'ClientController@show')->name('products/show');

Route::get('add-to-cart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/destroy/{product}','CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{product}','CartController@update')->name('cart.update');


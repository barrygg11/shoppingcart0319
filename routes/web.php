<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/barryshop', 'App\Http\Controllers\ProductsController@index');

Route::get('cart', 'App\Http\Controllers\ProductsController@cart');

Route::get('cartt', 'App\Http\Controllers\ProductsController@cartt');

Route::get('add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');

Route::patch('update-cart', 'App\Http\Controllers\ProductsController@update');

Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove');

Route::get('/pyment', function () {
    return view('pyment');
})->name('pyment.home');

Route::get('/login', function () {
    return view('login');
})->name('login.home');





Route::get('/', 'PageController@index')->middleware('userAuth');

Route::post('login', 'UserController@login');

Route::get('login', 'UserController@showLoginPage');

Route::get('logout', 'UserController@logout');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', 'App\Http\Controllers\ProductsController@index');

Route::get('cart', 'App\Http\Controllers\ProductsController@cart');

Route::get('cartt', 'App\Http\Controllers\ProductsController@cartt');

Route::get('add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');

Route::patch('update-cart', 'App\Http\Controllers\ProductsController@update');

Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove');

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

Route::get('/', 'IndexPageController@index')->name('index');


//PRODUCT ROUTES
Route::get('/shop/{slug}', 'ProductController@show')->name('product.show');
Route::get('/shop/category/{slug}', 'ProductController@show_category')->name('product.show_category');

//CART ROUTES
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@create')->name('cart.create');


//ORDER TRACK ROUTES
Route::get('/trackorder', 'TrackorderController@index')->name('trackorder.index');
Route::post('/trackorder', 'TrackorderController@show')->name('trackorder.show');

//ORDER TRACK ROUTES
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckOutController@create')->name('checkout.create');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

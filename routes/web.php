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

Route::get('/', 'HomeController@home_page')->name('home_page');

Route::group(['prefix' => 'buyer'], function () {
    Route::get('login', 'Auth\LoginController@login')->name('buyer.login');
    Route::get('signup', 'Auth\RegisterController@signup')->name('buyer.signup');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('all', 'ProductController@all')->name('product.all');
    Route::get('{category_slug}', 'ProductController@category_slug')->name('product.category_slug');
    Route::get('{category_featured}', 'ProductController@category_featured')->name('product.category_featured');
    Route::get('detail/{product_slug}', 'ProductController@detail')->name('product.detail');
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('all', 'BlogController@all')->name('blog.all');
    Route::get('detail/{blog_slug}', 'BlogController@detail')->name('blog.detail');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartController@view_cart')->name('cart.view_cart');
    Route::get('checkout', 'CartController@checkout')->name('cart.checkout');
});

Route::view('/test', 'pages.test');


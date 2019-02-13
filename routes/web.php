<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
	
	Route::resource('product','Admin\ProductController');
	Route::resource('category','Admin\CategoryController');
	Route::resource('brand','Admin\BrandController');
	Route::resource('product_image','Admin\Product_imageController');
	Route::resource('bookmark','Admin\BookmarkController');
	Route::resource('buyer','Buyer\BuyerController');
	Route::resource('rolls','Admin\RollController');


	});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
<?php

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
	Route::resource('roles','Admin\RoleController');
	});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('public','HomeController');
Route::get('user/about', 'HomeController@about')->name('about');
 
Route::post('image_upload', function() {
	    $CKEditor = Input::get('CKEditor');
	    $funcNum = Input::get('CKEditorFuncNum');
	    $message = $url = '';
	    if (Input::hasFile('upload')) {
	        $file = Input::file('upload');
	        if ($file->isValid()) {
	            $filename = $file->getClientOriginalName();
	            $file->move(public_path().'/images/', $filename);
	            $url = URL::to('/images/'.$filename);
	            
	        } else {
	            $message = 'An error occured while uploading the file.';
	        }
	    } else {
	        $message = 'No file uploaded.';
	    }
	    return '<script>window.parent.CKEDITOR.tools.callFunction('.$funcNum.', "'.$url.'", "'.$message.'")</script>';
	});
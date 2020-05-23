<?php

Route::get('contact', function () {
    return view('general.contact');
})->name('contact');

Route::get('about', function () {
    return view('general.about');
})->name('about');

Route::get('/',[
	'as'=>'home',
	'uses'=>'HomeController@getIndex'
]);
Route::get('/home',[
	'as'=>'home',
	'uses'=>'HomeController@getIndex'
]);
Route::get('/user_detail/{id}',[
	'as'=>'detail_user',
	'uses'=>'HomeController@getUser'
]);
Route::get('category/{id}',[
	'as'=>'category',
	'uses'=>'HomeController@getCategory'
]);
Route::get('product/{id}',[
	'as'=>'single_product',
	'uses'=>'HomeController@getSingleProduct'
]);
route::get('search',[
	'as'=>'search',
	'uses'=>'HomeController@getSearch'
]);
Route::patch('user/update',[
	'as' => 'update_user',
	'uses' => 'HomeController@updateUser'
]);
Route::post('user/sanpham/create',[
	'as' => 'create_product',
	'uses' => 'HomeController@createProduct'
]);
Route::get('user/sanpham/edit/{id}',[
	'as' => 'edit_product',
	'uses' => 'HomeController@editProduct'
]);
Route::post('user/sanpham/update/{id}',[
	'as' => 'update_product',
	'uses' => 'HomeController@updateProduct'
]);
Route::get('user/sanpham/delete/{id}',[
	'as' => 'delete_product',
	'uses' => 'HomeController@deleteProduct'
]);
Route::get('/message', 'MessageController@index')->name('message_page');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message_content');
Route::post('message', 'MessageController@sendMessage');
Route::get('/message_user/{id}', 'MessageController@createMessage')->name('message_user');
Auth::routes();

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('login');
 });
 
Route::group(['prefix' => 'user'], function () {
	Voyager::routes();

	Route::get('sanpham', 'HomeController@getProducts')->name('sanpham');

	Route::get('register',[
		'as'=>'register',
		'uses'=>'Voyager\VoyagerUserController@getRegister'
	]);
	Route::post('register',[
		'as'=>'register',
		'uses'=>'Voyager\VoyagerUserController@postRegister'
	]);
});

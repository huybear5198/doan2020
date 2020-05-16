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
route::get('search',[
	'as'=>'search',
	'uses'=>'HomeController@getSearch'
]);

Route::get('/message', 'MessageController@index')->name('message_page');
Route::get('/message/{id}', 'MessageController@getMessage')->name('message_content');
Route::post('message', 'MessageController@sendMessage');

Auth::routes();

Route::get('/logout', function(){
	Auth::logout();
	return Redirect::to('login');
 });
 
Route::group(['prefix' => 'user'], function () {
	Voyager::routes();

	Route::get('register',[
		'as'=>'register',
		'uses'=>'Voyager\VoyagerUserController@getRegister'
	]);
	Route::post('register',[
		'as'=>'register',
		'uses'=>'Voyager\VoyagerUserController@postRegister'
	]);
});

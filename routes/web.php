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
    return view('general.home');
})->name('home');

Route::get('contact', function () {
    return view('general.contact');
})->name('contact');

Route::get('about', function () {
    return view('general.about');
})->name('about');

//LOIGN
Route::get('login',[
	'as'=>'login',
	'uses'=>'UserController@getLogin'
]);

Route::post('postlog',[
	'as'=>'postlog',
	'uses'=>'UserController@postLogin'
]);
//REGISTER
Route::get('register',[
	'as'=>'register',
	'uses'=>'UserController@getRegister'
]);

Route::post('postreg',[
	'as'=>'postreg',
	'uses'=>'UserController@postRegister'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

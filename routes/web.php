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

route::get('search',[
	'as'=>'search',
	'uses'=>'HomeController@getSearch'
]);

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

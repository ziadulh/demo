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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminPannel', 'testController@adminPannel');
Route::get('adminPannel/{id}/editapuser', 'testController@edit');
Route::post('adminPannel/{id}/update', 'testController@update');
Route::post('adminPannel/{id}/update', 'testController@update');

Route::post('adminPannel/{id}/delete', 'testController@destroy');

/*Route::get('/test','testController@test')->middleware('test');*/

/*
Route::group(['middleware' => 'test'], function()
{
	
Route::get('/test','testController@test')->name('test');

	

});*/


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('Admin.Test.index');
});
Route::resource('categories' , 'CategoryController');
Route::resource('contents' , 'ContentController');


Route::get('/download/{file}',[
	'uses' =>'DownloadController@download',
	'as' =>'download.file'

	]);
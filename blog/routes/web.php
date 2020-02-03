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

//Sample Middleware
// Route::get('/', function () {
//     return view('welcome');
// })->middleware('down'); //for multiple middlwware use (['middlewarename1', 'middlewarename2'])

Route::resource('blog','ArticlesController');

Route::get('/testred/{message}', "RedirectSampleController@showMessage")->name("RedirectIndex");


Route::get('/redirectme', function () {
    // return redirect()->route('RedirectIndex', ['message' => 'This is my message']);

    //to redirect user to action
    return redirect()->action("RedirectSampleController@showSomething");
});

Route::get('/showsomething',"RedirectSampleController@showSomething");

Route::get('/sample',"PagesController@index");

Route::get('/maintenance', "PagesController@maintenance");

Route::group(['middleware' => 'mymiddlewares'], function(){
	Route::get('/sample',"PagesController@index");
});

Route::get("encrypt", "PagesController@encryptval");
Route::get("decrypt", "PagesController@decryptval");
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

Route::get('/contactus','PagesController@contactus');

Route::get("/employees", function(){

	$grade = 60;
	$age = 17;
	$employees = array(
		array("name" => "Cedric", "age" => 20, "dept" => "IT"),
		array("name" => "Lei", "age" => 15, "dept" => "IT"),
		array("name" => "Eden", "age" => 15, "dept" => "Technical")
	);


	return view('employess')
		->with('employees', $employees)
		->with('grade', $grade)
		->with('age', $age);
});



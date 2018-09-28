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

Route::get('test', function(){
	DB::table('admin')->insert(['name'=>'Duy Hoa', 'username'=>'h0aday_nd', 'password'=>'123']);
});

Route::get('home', function(){
	return view('Admin.home');
});

Route::get('admin', function(){
	$admins = DB::table('admin')->get();
	echo "<pre>";
	print_r($admins);
	echo "</pre>";
});
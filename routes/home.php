<?php 
use Illuminate\Http\Request;
// Route::group(['middleware' => 'auth'], function(){
// 	Route::get('/', function(){
// 		return view('home');
// 	});

	Route::group(['pefix' => 'loaihanghoa'], function(){
		Route::get('/', 'Admin\LoaihanghoaController@index')->name('nhomsp.list');
	});

 ?>
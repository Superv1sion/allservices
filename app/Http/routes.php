<?php

Route::group(['middleware' => ['web']], function () {
	
	Route::get('/', function () {
	    return View::make('welcome');
	});

});
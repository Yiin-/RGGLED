<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('front');
});

Route::get('projects', function () {
	return view('front');
});

/*Route::get('/{locale?}', function ($locale = null) {
	if($locale == null) {
		return Redirect::to(Session::get('my.locale', Config::get('app.locale')));
	}
	else {
		Session::put('my.locale', $locale);
		App::setLocale($locale);

    	return view('front');
	}
});*/
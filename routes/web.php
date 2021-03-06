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
    return view('index');
});

Route::prefix('/')->group(function () {
    Route::get('index', function () {
    	return view('index');
    });
    Route::get('user', function () {
    	return view('user');
    });
    Route::get('table', function () {
    	return view('table');
    });
    Route::get('template', function () {
    	return view('template');
    });
    Route::get('maps', function () {
        return view('maps');
    });
    Route::get('icons', function () {
    	return view('icons');
    });
    Route::get('typography', function () {
    	return view('typography');
    });
    Route::get('notifications', function () {
    	return view('notifications');
    });

    Route::get('sample', function () {
    return view('sample');
});

});
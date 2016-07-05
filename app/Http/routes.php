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
    return view('welcome');
});

/**
 * 코드그룹
 */
Route::resource('mth-code-groups', 'MthCodeGroupController');

/**
 * 코드
 */
Route::resource('mth-code', 'MthCodeController');
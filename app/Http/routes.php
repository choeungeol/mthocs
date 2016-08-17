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

/**
 *  권한
 */
Route::auth();

/**
 * OAuth 인증
 */
//Github 인증
Route::get('auth/github', 'Auth\AuthController@redirectToGitHub');
Route::get('auth/github/callback', 'Auth\AuthController@handleGitHubCallback');

//Kakao 인증
Route::get('auth/kakao', 'Auth\AuthController@redirectToKakao');
Route::get('auth/kakao/callback', 'Auth\AuthController@handleKakaoCallback');

/**
 * 초기화면
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

/**
 * 시스템관리
 */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('/', 'AdminController@getMain');

    Route::get('view/{path?}', function($path = null) {
        if ($path === null) {
            return view('app.admin.intro');
        } else {
            return view('app.admin.' . $path);
        }
    });
});

/**
 * 코드그룹/코드
 */
Route::resource('mth-code-group', 'MthCodeGroupController');
Route::resource('mth-code', 'MthCodeController');



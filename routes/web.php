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
//前台主页
Route::get('/', function () {
    return view('home/index');
});
//注册
Route::get('/register','Home\RegisterController@index');
Route::post('/register/register','Home\RegisterController@register');
Route::post('/register/check_code','Home\RegisterController@check_code');
//登录
Route::get('/login','Home\LoginController@login');
Route::post('/login/login_pro','Home\LoginController@login_pro');
Route::get('/login/login_pro','Home\LoginController@login_pro');

Route::get('/login/logout','Home\LoginController@logout');
//手机验证码
Route::get('/register/phone_code','Home\RegisterController@phone_code');
Route::get('/register/check_phone','Home\RegisterController@check_phone');
Route::get('/register/check_email','Home\RegisterController@check_email');
//登录验证码
//Route::any('/login/captcha','Home\LoginController@captcha');
//Route::any('/login/create','Home\LoginController@create');
//后台登录
Route::get('admin', function () {
    return view('admin/login');
});
//后台主页
Route::any('admin/log', function () {
    return view('admin/index');
});





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
Route::get('test', function () {
    return phpinfo();
});
Route::get('/home', 'home\IndexController@index');
// 后台登录页面
Route::get('/admin', 'admin\LoginController@login');
// 后台分类路由
Route::get('/admin/type', 'admin\TypeController@type');
// 后台展示父级分类
Route::get('/admin/typeName', 'admin\TypeController@typeName');
// 后台添加新分类
Route::post('/admin/typeAdd', 'admin\TypeController@typeAdd');



// 后台添加信息成功页面
Route::get('/admin/success/{con?}/{ac?}','admin\MessageController@success');
// 后天添加信息失败页面
Route::get('/admin/fail/{con?}/{ac?}','admin\MessageController@fail');
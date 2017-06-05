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
//后台首页
Route::get('/admin/index','Admin\IndexController@index');
//后台商城
Route::get('/admin/design','Admin\IndexController@design');
//后台商城添加页面
Route::get('/admin/insert','Admin\IndexController@insert');
//后台商城添加
Route::post('/admin/insert_to','Admin\IndexController@insert_to');
//后台商城修改页面
Route::get('/admin/update','Admin\IndexController@update');
//后台商城修改
Route::post('/admin/update_to','Admin\IndexController@update_to');
//后台商城删除
Route::post('/admin/del','Admin\IndexController@del');


Route::group(['middleware'=>['web']],function(){
    //前台商城展示
    Route::any('/home/shop','home\ShopController@index');
    //添加购物车
    Route::post('/home/shopcar','home\ShopController@shopcar');
});
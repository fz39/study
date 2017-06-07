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

// 前台首页
Route::any('/', 'home\IndexController@index');
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
// 前台的列表
Route::get('/home/list','home\ListController@lists');
// 前台的课程详情
Route::get('/home/course','home\CourseController@course');
// 前台的视频展示
Route::get('/home/video','home\VideoController@video');






// 后台登录页面
Route::get('/admin', 'admin\LoginController@login');
// 后台分类路由
Route::get('/admin/type', 'admin\TypeController@type');
// 后台展示父级分类
Route::get('/admin/typeName', 'admin\TypeController@typeName');
// 后台添加新分类
Route::post('/admin/typeAdd', 'admin\TypeController@typeAdd');
// 后台添加课程
Route::get('/admin/course', 'admin\CourseController@course');
// 后台课程选择分类
Route::get('/admin/courseName','admin\CourseController@courseName');
// 后台添加新课程
Route::post('/admin/course', 'admin\CourseController@course');
// 后台添加视频
Route::get('/admin/video', 'admin\VideoController@video');
// 后台课程选择分类下课程
Route::get('/admin/videoCourse','admin\VideoController@videoCourse');
// 后台添加新视频
Route::post('/admin/video', 'admin\VideoController@video');

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
     //查看购物车
    Route::any('/home/shopcarlist','home\ShopController@shopcarlist');
    //删除购物车
    Route::any('/home/shopcardel','home\ShopController@shopcardel');
});
//收货地址展示
Route::any('/home/addresslist','home\AddressController@addresslist');
//收货地址添加页面
Route::any('/home/addressadd','home\AddressController@addressadd');
//收货地址三级联动
Route::any('/home/pro','home\AddressController@pro');
Route::post('/home/addressinser','home\AddressController@addressinser');
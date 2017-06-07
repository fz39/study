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
// 前台首页
Route::get('/home', 'home\IndexController@index');
// 前台的列表
Route::get('/home/list','home\ListController@list');
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

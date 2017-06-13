<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use App\model\LoginModel;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function login(){
        return view('admin/login');
    }
    //后台登录方法
    public function login_pro()
    {
        $admin_name = Input::get('admin_name');
        $admin_password = Input::get('admin_password');
        $model = new LoginModel();
        //过滤
        $admin_name = $model->actionFilterWords($admin_name);
        $admin_password = $model->actionFilterWords($admin_password);

        $info = DB::table('admin')
            ->where('admin_name','=',$admin_name)
            ->where('admin_password','=',$admin_password)
            ->get()->toArray();
        $info =  json_decode( json_encode( $info),true);
        if (!empty($info)){
            setcookie('admin_name',$admin_name,time()+1*24*3600,'/');
            setcookie('admin_id',$info[0]['admin_id'],time()+1*24*3600,'/');
            //跳转首页
            return redirect('admin/index');
        }else{
           echo "用户名或密码不对";
        }
    }
    //退出登录
    public function login_out()
    {
//        $cookie = Cookie::forget('admin_name');
//        return Redirect::route('admin/login')->withCookie($cookie);
        setcookie('admin_name','',time()-1,'/');
        return redirect('admin/login');
    }
}

<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\model\LoginModel;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('home/login');
    }
//    public function captcha(Request $request){
//        $builder = new CaptchaBuilder;
//        $builder->build();
//        $bb = $builder->inline();  //获取图形验证码的url
//        $request->session()->put('piccode', $builder->getPhrase());  //将图形验证码的值写入到session中
//        return view('home/login',["bb"=>$bb]);
//    }

    //登录方法
    public function login_pro()
    {
        $user_name = Input::get('user_name');
        $user_password = Input::get('user_password');
        $model = new LoginModel();
        //过滤
        $user_name = $model->actionFilterWords($user_name);
        $user_password = $model->actionFilterWords($user_password);

        $info = DB::table('user')
            ->where('user_phone','=',$user_name)
            ->where('user_password','=', md5($user_password))
            ->get()->toArray();
        // dd($info);
        $info =  json_decode( json_encode( $info),true);

        if (!empty($info)){

            setcookie('user_name',$user_name,time()+1*24*3600,'/');
            setcookie('user_id',$info[0]['user_id'],time()+1*24*3600,'/');
            //跳转首页
            return redirect('/');

        }else{
            echo "用户名或密码不正确";
        }

    }
    //退出登录
    public function logout()
    {
        setcookie('user_name','',time()-1,'/');
        return redirect('/');
    }
}
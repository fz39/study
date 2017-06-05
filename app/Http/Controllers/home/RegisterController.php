<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Page;
use DB;
use App\model\RegisterModel;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Org\Phpmailer\Mailer;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home/register');
    }
    
    //注册
    public function register(Request $request)
    {
        $user_name = Input::get('user_name');
        $validateCode = Input::get('validateCode');
        $user_password = md5(Input::get('user_password'));

        $data = [];
        if(preg_match("/^1[34578]{1}\d{9}$/",$user_name)){
            $data['user_phone'] = $user_name;
            setcookie('user_name',$data['user_phone'],'0','/');
        }else{
            $data['user_email'] = $user_name;
            setcookie('user_name',$data['user_email'],'0','/');
        }

        $data['user_password'] = $user_password;
        $re = DB::table('study_user')->insert($data);
        if($re){
            //跳转首页
            return redirect('/');
        } else {
           //返回注册
            return redirect('register/register');
        }
    }
    //发送邮箱验证码
    public function check_email(Request $request)
    {
        $email =  Input::get('phone');
        //$mailer = new Mailer();

        $rand = rand(10000,99999);
        $request->session()->put($email,$rand);
        $data = [
            'user_name'=>$email,
            'code'=>$rand,
        ];
        //$rtn = $mailer->test($data);
    }

    //手机验证码发送
    public function phone_code(Request $request)
    {
        $phone =  Input::get('phone');
        
        $sms = new RegisterModel( array('api_key' => 'c4d08cbd682c7bdae5c2f9afc3163335' , 'use_ssl' => FALSE ) );
        $rand = rand(10000,99999);
        $sms->send( $phone, '验证码：'.$rand.'【铁壳测试】');
        
        $request->session()->put($phone,$rand);

    }

    //获取验证码判断
    public function check_code(Request $request)
    {
        $code =  $request->input('code');
        $phone =  $request->input('phone');
        $codes = $request->session()->get($phone);
        if($codes==$code){
            echo "1";
        }else{
            echo "0";
        }
    }
    //验证手机号的唯一性
    public function check_phone()
    {
        $user_phone = Input::get("user_phone");
        $data = DB::table('study_user')->where('user_phone', $user_phone)->first();
        if($data) {
            echo 0;die;
        } else {
            echo 1;die;
        }
    }
    
}
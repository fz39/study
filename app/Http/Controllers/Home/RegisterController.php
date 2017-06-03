<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Page;
use DB;
use App\Model\RegisterModel;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home/register');
    }
    
    //注册
    public function register()
    {
        $user_email=Input::get('user_email');
        $user_name = Input::get('user_name');
        $user_phone = Input::get('user_phone');
        $validateCode = Input::get('validateCode');
      //$user_password = Hash::make(Input::get('user_password'));
       $user_password = md5(Input::get('user_password'));
        $data=[
            'user_email'=>$user_email,
            'user_name'=>$user_name,
            'user_password'=>$user_password,
            'user_phone'=>$user_phone
        ];
//        var_dump($data);die;
        $re = DB::table('study_user')->insert($data);
        if($re){
            setcookie('user_name',$data['user_name'],'0','/');
            //跳转首页
            return redirect('/');
        } else {
           //返回注册
            return redirect('register/register');
        }
}

    //手机验证码发送
    public function phone_code()
    {
        $phone =  Input::get('phone');
        $sms = new RegisterModel( array('api_key' => 'c4d08cbd682c7bdae5c2f9afc3163335' , 'use_ssl' => FALSE ) );
        $rand = rand(10000,99999);
        $res = $sms->send( $phone, '验证码：'.$rand.'【铁壳测试】');
        if( $res ){
            if( isset( $res['error'] ) &&  $res['error'] == 0 ){
                echo $rand;die;
            }else{
                echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
            }
        }else{
            var_dump( $sms->last_error() );
        }
        exit;

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
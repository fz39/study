<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Input;
use Laravel\Socialite\One;
use DB;

class AuthController extends Controller
{
    public function weibo()
    {
        return Socialite::driver('weibo')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('weibo')->stateless()->user();
        $weiBo = DB::table('user')->where('weibouid',$user->id)->first();
        if(empty($weiBo)){
            $data = [
                "weibouid" => $user->id,
                "user_name" => $user->nickname,
                //"user_email" => $user->getEmail,
            ];
            $rnt = DB::table('user')->insert($data);
            if($rnt){
                setcookie('user_name',$data['user_name'],time()+1*24*3600,'/');
                return redirect('/');
                die;
            }
        }
        setcookie('user_name',$user->nickname,time()+1*24*3600,'/');
        return redirect('/');
    }

}

<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use session;


class ShopController extends Controller
{
    /*
     * 商城展示
     * */
    public function index()
    {
        $res = DB::select("select * from goods");
        return view('home.shop')->with('res',$res);
    }

    /*
     * 添加购物车
     * */
    public function shopcar()
    {
        $arr = Input::all();
        $ids = $arr['id'];
        $session = session()->all();
//        session()->forget('gwc');
//        session()->save();die;
        if(empty($session["gwc"]))
        {
            //如果点击的购物车是空的（第一次添加）
            //如果购物车里是空的，造二维数组，
            $arr = [
                [$ids,1]
                //一维数组，取ids，第一次点击增加一个
            ];
            session()->put('gwc',$arr);
            session()->save();
        } else {
            //先判断购物车里是否已经有了该商品，用$ids
            $arr = $session["gwc"];
            //把购物车的状态取出来
            $chuxian = false;
            foreach ($arr as $v) {
                //如果这里面有这件商品
                if ($v[0] == $ids) //如果取过来的id等于$ids那么就证明购物车中已经有了这一件商品
                {
                    $chuxian = true;
                }
            }
            if($chuxian)
            {
                //购物车中有此商品
                for($i=0;$i<count($arr);$i++)
                {
                    if($arr[$i][0] == $ids)
                    {
                        //把点到的商品id加1
                        $arr[$i][1] += 1;
                    }
                }
//                print_r($arr);die;
                session()->put('gwc',$arr);
                session()->save();
            }
            else
            {
                //这里就只剩下：购物车里有东西，但是并没有这件商品
                $asg = [$ids,1];
                //设一个小数组
                $arr[] = $asg;

                $arr1 = array_merge($arr);
                session()->put('gwc',$arr1);
                session()->save();
            }

        }

    }
    /*
     * 购物车展示
     * */
    public function shopcarlist()
    {

    }


}




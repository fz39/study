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
            $data = [
                'msg'=>'添加购物车成功',
                'status'=>1
            ];
        echo json_encode($data);
    }
    /*
     * 购物车展示
     * */
    public function shopcarlist()
    {
        $session = session()->all();
        $aaa = array_key_exists('gwc', session()->all());
        if(!empty($aaa)) {
            $arr = $session['gwc'];
            $res = [];
            foreach ($arr as $v) {
                $att = DB::select("select * from goods where goods_id='{$v[0]}'");
                foreach ($att as $n) {
                    $res [] = [
                        'goods_img' => $n->goods_img,
                        'goods_name' => $n->goods_name,
                        'goods_price' => $n->goods_price,
                        'goods_num' => $v[1],
                        'goods_id' => $v[0]
                    ];
                }
            }

            return view('home.shopcarlist')->with('res', $res);
        }else{
            $res [] = [];
            return view('home.shopcarlist')->with('res', $res);
        }
    }
    /*
     * 购物车删除
     * */
    public function shopcardel()
    {
        $id = Input::all();
        $sy = $id['id'];
        $session = session()->all();
        //根据索引找到该数据
        $arr = $session["gwc"];
        //如果数量不为1，数量减1
        for($i=0;$i<count($arr);$i++)
        {
            if($arr[$i][0]==$sy) {
                if ($arr[$i][1] > 1) {
                    //把点到的商品id加1
                    $arr[$i][1] -= 1;
                } else  //如果数量为1，移除
                    {
                        unset($arr[$i]);
                    }
            }
        }
        session()->put('gwc',$arr);
        session()->save();
            $data = [
                'msg'=>'删除成功',
                'status'=>1
            ];

        return json_encode($data);
    }
}




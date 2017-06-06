<?php
namespace App\Http\Controllers\home;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use session;
use App\Http\Requests;
use App\model\RegisterModel;
class AddressController extends Controller
{
    /*
     * 收货地址展示页面
     * */
    public function addresslist(Request $request)
    {
//        echo'111';die;
       $user_id = $_COOKIE['user_id'];
       $res = DB::select('select * from address where user_id= '.$user_id);
       return view("home.addresslist")->with('res',$res);

    }
    /*
     * 添加地址页面
     * */
    public function addressadd()
    {
        $res = DB::select('select * from region where parent_id=1');
        return view('home.addressad')->with('res',$res);;
    }
    /*
     * 三级联动查询
     * */
    public  function pro()
    {
        $arr = Input::all();
        $id = $arr['id'];
        $res = DB::select("select * from region where parent_id=".$id);

        return json_encode($res);
    }
    /*
     * 收货地址添加
     * */
    public function addressinser()
    {
        $user_id = $_COOKIE['user_id'];
        $arr = Input::all();
        $consignee = $arr['consignee'];
        $mobile = $arr['mobile'];
        $a1 = DB::select("select region_name from region where region_id=".$arr['sheng']);
        $a2 = DB::select("select region_name from region where region_id=".$arr['shi']);
        $a3 = DB::select("select region_name from region where region_id=".$arr['xian']);

        $sheng = json_decode( json_encode($a1),true)[0]['region_name'];
        $shi = json_decode( json_encode($a2),true)[0]['region_name'];
        $xian =  json_decode( json_encode($a3),true)[0]['region_name'];
        $res = $sheng .$shi .$xian .$arr['street'];
        $add = DB::insert("insert into address(user_id,consignee,mobile,address)value('$user_id','$consignee','$mobile','$res')");
        print_r($add);die;
    }
}
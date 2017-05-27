<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App;
use Illuminate\Support\Facades\Redirect;
use Request;
class IndexController extends Controller
{
    /*
     * 后台首页
     * */
    public function index()
    {

        return view('admin.index');
    }
    /*
     * 商城管理
     * */
    public function design()
    {
        $name = DB::select('select * from goods');

        return view('admin.design')->with('name',$name);
    }
    /*
     * 新增商品
     * */
    public function insert()
    {
        return view('admin.insert');

    }
    public function insert_to()
    {
        $arr = Request::all();
        $file = $arr['goods_img'];
        $goods_name = $arr['goods_name'];
        $goods_count = $arr['goods_count'];
        $goods_price = $arr['goods_price'];
        $goods_integral = $arr['goods_integral'];
        if($file -> isValid()){
            $clientName = $file -> getClientOriginalName();//获取文件名
            $tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
            $realPath = $file -> getRealPath();   //这个表示的是缓存在tmp文件夹下的文件的绝对路径
            $entension = $file -> getClientOriginalExtension();  //上传文件的后缀.
            $mimeTye = $file -> getMimeType();
            $newName = md5(date('ymdhis').$clientName).".".$entension;
            $goods_img = 'admin/uploads/'.$newName;
            $path = $file -> move('admin/uploads',$newName);
            if($path){
                $sql = DB::insert("insert into goods(goods_name,goods_img,goods_count,goods_price,goods_integral)value('$goods_name','$goods_img','$goods_count','$goods_price','$goods_integral')");
                if($sql){

                   return redirect('/admin/design');
                }
            }
        }
    }
    /*
     * 修改页面
     * */
    public function update()
    {
        $id = Request::get('id');
        $sql = DB::select("select * from goods where goods_id='$id '");
        return view('admin.update')->with('arr',$sql);
    }
    public function update_to()
    {
        $arr = Request::all();
        $file = $arr['goods_img'];
        $goods_id = $arr['goods_id'];
        $goods_name = $arr['goods_name'];
        $goods_count = $arr['goods_count'];
        $goods_price = $arr['goods_price'];
        $goods_integral = $arr['goods_integral'];
        if($file -> isValid()){
            $clientName = $file -> getClientOriginalName();//获取文件名
            $tmpName = $file ->getFileName(); // 缓存在tmp文件夹中的文件名 例如 php8933.tmp 这种类型的.
            $realPath = $file -> getRealPath();   //这个表示的是缓存在tmp文件夹下的文件的绝对路径
            $entension = $file -> getClientOriginalExtension();  //上传文件的后缀.
            $mimeTye = $file -> getMimeType();
            $newName = md5(date('ymdhis').$clientName).".".$entension;
            $goods_img = 'admin/uploads/'.$newName;
            $path = $file -> move('admin/uploads',$newName);
            if($path){
                $sql = DB::update("update goods set goods_name='$goods_name',goods_img='$goods_img',goods_count='$goods_count',goods_price='$goods_price',goods_integral='$goods_integral' where goods_id='$goods_id'");
                if($sql){

                    return redirect('/admin/design');
                }else{
                    alert("修改失败");
                }
            }
        }
    }
    public function del()
    {
        $res = Request::all();
        $id = $res['id'];
        $arr = DB::delete("delete from goods where goods_id='$id'");
        if($arr){
            $data = [
                'status'=>1,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'status'=>0,
                'msg'=>'删除失败',
            ];

        }

        return json_encode($data);
    }

}
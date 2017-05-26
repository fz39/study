<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Type;

class IndexController extends Controller
{
    public function index(){
        $type = new Type();
        $type_arr = $type->typeHome();
        // echo "<pre>";
        // print_r($type_arr);die;
        // count计算二维数组的时候计算的是里面有多少个数组
        foreach($type_arr as $key=>$val){
            // echo $val['parent_id'];
            $parent_id = explode('_', $val['parent_id']);
            if($parent_id[0] == 0){
            // 一级分类
                $result['type_arr'][$val['id']]['type_name'] = $val['type_name'];
            }else if($parent_id[0] != 0 && count($parent_id) == 1){
            // 二级分类
                $result['type_arr'][$parent_id[0]]['son'][$val['id']]['type_name'] = $val['type_name'];
            }else if($parent_id[0] != 0 && count($parent_id) == 2){
            // 三级分类
                $result['type_arr'][$parent_id[0]]['son'][$parent_id[1]]['son'][$val['id']]['type_name'] = $val['type_name'];
            }
        }
        // $tree['type_arr'] =$this -> getSubTree($type_arr , 0 );
        // echo "<pre>";
        // print_r($result);die;
        return view('home/index', $result);
    }
    public function type(){
          
    }

    function getSubTree($type_arr , $id = 0 ) {
           $son = [];
            foreach($type_arr as $key => $value) {
                if($value['parent_id'] == $id) {
                    $value['son'] = $this->getSubTree($type_arr , $value['id'] );
                    $son[] = $value;         
                }
            }

            return $son;
        }
}

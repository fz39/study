<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Course;
use App\model\Type;

class ListController extends Controller
{
    public function lists(Request  $request){
        $type = new Type();
        $course = new Course();
        if($request->isMethod('post')){
            
        }else{
            $type_arr = $type->typeHome();
            foreach($type_arr as $k=>$v){
                if($v['type_rank'] == 0){
                    // 一级菜单
                    $result['one'][$k]['id'] = $v['id'];
                    $result['one'][$k]['type_name'] = $v['type_name'];
                    $result['one'][$k]['type_rank'] = $v['type_rank'];
                }elseif($v['type_rank'] == 1){
                    // 二级菜单
                    $result['two'][$k]['id'] = $v['id'];
                    $result['two'][$k]['type_name'] = $v['type_name'];
                    $result['two'][$k]['type_rank'] = $v['type_rank'];
                }else{
                    // 三级菜单
                    $result['three'][$k]['id'] = $v['id'];
                    $result['three'][$k]['type_name'] = $v['type_name'];
                    $result['three'][$k]['type_rank'] = $v['type_rank'];
                }
            }
            $course_arr = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->get()->toArray();
            // print_r($course_arr);die;
            foreach($course_arr as $k=>$v){
                if($v['course_rank'] == 1){
                    // 基础课程
                    $result['basis'][$k]['id'] = $v['id'];
                    $result['basis'][$k]['course_name'] = $v['course_name'];
                    $result['basis'][$k]['course_intro'] = $v['course_intro'];
                    $result['basis'][$k]['course_rank'] = $v['course_rank'];
                    $result['basis'][$k]['course_people'] = $v['course_people'];
                    $result['basis'][$k]['type_one'] = $v['type_one'];
                    $result['basis'][$k]['type_two'] = $v['type_two'];
                    $result['basis'][$k]['type_three'] = $v['type_three'];
                    $result['basis'][$k]['type_name'] = $v['type']['type_name'];
                }else{
                    // 高级课程
                    $result['expert'][$k]['id'] = $v['id'];
                    $result['expert'][$k]['course_name'] = $v['course_name'];
                    $result['expert'][$k]['course_intro'] = $v['course_intro'];
                    $result['expert'][$k]['course_rank'] = $v['course_rank'];
                    $result['expert'][$k]['type_name'] = $v['course_rank'];
                    $result['expert'][$k]['course_people'] = $v['course_people'];
                    $result['expert'][$k]['course_money'] = $v['course_money'];
                    $result['expert'][$k]['type_one'] = $v['type_one'];
                    $result['expert'][$k]['type_two'] = $v['type_two'];
                    $result['expert'][$k]['type_three'] = $v['type_three'];
                    $result['expert'][$k]['type_name'] = $v['type']['type_name'];
                }
            }
            $result['expert_one'] = array_shift($result['expert']);
            // print_r($result);die;
            return view('home/list', $result);
        }
    }
}

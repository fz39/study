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
        if($request->isMethod('get')){
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
            $course_arr = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->where('course_rank', 1)->get()->toArray();
            // print_r($course_arr);die;
            foreach($course_arr as $k=>$v){
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
                
            }
            $expert = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->where('course_rank', 2)->get()->toArray();
            // print_r($expert);die;
            $rand = array_rand($expert, 4);
            shuffle($rand);
            foreach($rand as $k=>$v){
                // 高级课程
                $result['expert'][$k]['id'] = $expert[$v]['id'];
                $result['expert'][$k]['course_name'] = $expert[$v]['course_name'];
                $result['expert'][$k]['course_intro'] = $expert[$v]['course_intro'];
                $result['expert'][$k]['course_rank'] = $expert[$v]['course_rank'];
                $result['expert'][$k]['course_people'] = $expert[$v]['course_people'];
                $result['expert'][$k]['course_money'] = $expert[$v]['course_money'];
                $result['expert'][$k]['type_one'] = $expert[$v]['type_one'];
                $result['expert'][$k]['type_two'] = $expert[$v]['type_two'];
                $result['expert'][$k]['type_three'] = $expert[$v]['type_three'];
                $result['expert'][$k]['type_name'] = $expert[$v]['type']['type_name'];
            }
            $result['expert_one'] = array_shift($result['expert']);
            return view('home/list', $result);
        }
    }
    public function listCourse(Request $request){
        $type = new Type();
        $course = new Course();
        if($request->isMethod('get')){
            $id = $request->input('id');
            $rank = $request->input('rank');
            if($rank == 1){
            // 一级菜单
                $result['one'] = $type->typeId($id);
                $result['two'] = $type->typeParent($result['one'][0]['id']);
                foreach($result['two'] as $k=>$v){
                    $data[] = $result['one'][0]['id'].'_'.$v['id'];
                }
                $result['three'] = $type->typeInparent($data);
                // 课程
                $course_arr = $course->typeOne($result['one'][0]['id']);
                $str = '';
                foreach($course_arr as $k=>$v){
                    $str .= $v['type_three'].',';
                }
                $str = substr($str , 0,-1);
                $arr = explode(',',$str); 
                $type_arr = $type->typeInid($arr);
                foreach($type_arr as $key=>$val){
                    foreach($course_arr as $k=>$v){
                        if($v['type_three'] == $val['id']){
                            $course_arr[$k]['type']['id'] = $val['id'];
                            $course_arr[$k]['type']['type_name'] = $val['type_name'];
                        }
                    }
                }
                // print_r($course_arr);die;
                foreach($course_arr as $k=>$v){
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
                }
                $expert = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->where('course_rank', 2)->get()->toArray();
                // print_r($expert);die;
                $rand = array_rand($expert, 4);
                shuffle($rand);
                foreach($rand as $k=>$v){
                    // 高级课程
                    $result['expert'][$k]['id'] = $expert[$v]['id'];
                    $result['expert'][$k]['course_name'] = $expert[$v]['course_name'];
                    $result['expert'][$k]['course_intro'] = $expert[$v]['course_intro'];
                    $result['expert'][$k]['course_rank'] = $expert[$v]['course_rank'];
                    $result['expert'][$k]['course_people'] = $expert[$v]['course_people'];
                    $result['expert'][$k]['course_money'] = $expert[$v]['course_money'];
                    $result['expert'][$k]['type_one'] = $expert[$v]['type_one'];
                    $result['expert'][$k]['type_two'] = $expert[$v]['type_two'];
                    $result['expert'][$k]['type_three'] = $expert[$v]['type_three'];
                    $result['expert'][$k]['type_name'] = $expert[$v]['type']['type_name'];
                }
                $result['expert_one'] = array_shift($result['expert']);
                return view('home/list', $result);
            }else if($rank == 2){
            // 二级菜单
                $result['two'] = $type->typeId($id);
                $result['one'] = $type->typeId($result['two'][0]['parent_id']);
                foreach($result['two'] as $k=>$v){
                    $data[] = $result['one'][0]['id'].'_'.$v['id'];
                }
                $result['three'] = $type->typeInparent($data);
                // 课程
                $course_arr = $course->typeTwo($result['two'][0]['id']);
                $str = '';
                foreach($course_arr as $k=>$v){
                    $str .= $v['type_three'].',';
                }
                $str = substr($str , 0,-1);
                $arr = explode(',',$str); 
                $type_arr = $type->typeInid($arr);
                foreach($type_arr as $key=>$val){
                    foreach($course_arr as $k=>$v){
                        if($v['type_three'] == $val['id']){
                            $course_arr[$k]['type']['id'] = $val['id'];
                            $course_arr[$k]['type']['type_name'] = $val['type_name'];
                        }
                    }
                }
                // print_r($course_arr);die;
                foreach($course_arr as $k=>$v){
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
                }
                $expert = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->where('course_rank', 2)->get()->toArray();
                // print_r($expert);die;
                $rand = array_rand($expert, 4);
                shuffle($rand);
                foreach($rand as $k=>$v){
                    // 高级课程
                    $result['expert'][$k]['id'] = $expert[$v]['id'];
                    $result['expert'][$k]['course_name'] = $expert[$v]['course_name'];
                    $result['expert'][$k]['course_intro'] = $expert[$v]['course_intro'];
                    $result['expert'][$k]['course_rank'] = $expert[$v]['course_rank'];
                    $result['expert'][$k]['course_people'] = $expert[$v]['course_people'];
                    $result['expert'][$k]['course_money'] = $expert[$v]['course_money'];
                    $result['expert'][$k]['type_one'] = $expert[$v]['type_one'];
                    $result['expert'][$k]['type_two'] = $expert[$v]['type_two'];
                    $result['expert'][$k]['type_three'] = $expert[$v]['type_three'];
                    $result['expert'][$k]['type_name'] = $expert[$v]['type']['type_name'];
                }
                $result['expert_one'] = array_shift($result['expert']);
                return view('home/list', $result);
            }else{
            // 三级菜单
                $result['three'] = $type->typeId($id);
                $array = explode('_',$result['three'][0]['parent_id']);
                $result['one'] = $type->typeId($array[0]);
                $result['two'] = $type->typeId($array[1]);
                // 课程
                $course_arr = $course->typeThree($result['three'][0]['id']);
                $str = '';
                foreach($course_arr as $k=>$v){
                    $str .= $v['type_three'].',';
                }
                $str = substr($str , 0,-1);
                $arr = explode(',',$str); 
                $type_arr = $type->typeInid($arr);
                foreach($type_arr as $key=>$val){
                    foreach($course_arr as $k=>$v){
                        if($v['type_three'] == $val['id']){
                            $course_arr[$k]['type']['id'] = $val['id'];
                            $course_arr[$k]['type']['type_name'] = $val['type_name'];
                        }
                    }
                }
                // print_r($course_arr);die;
                foreach($course_arr as $k=>$v){
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
                }
                // 高级课程
                $expert = $course->with(['type'=>function($query){$query->select('id', 'type_name');}])->where('course_rank', 2)->get()->toArray();
                // print_r($expert);die;
                $rand = array_rand($expert, 4);
                shuffle($rand);
                foreach($rand as $k=>$v){
                    // 高级课程
                    $result['expert'][$k]['id'] = $expert[$v]['id'];
                    $result['expert'][$k]['course_name'] = $expert[$v]['course_name'];
                    $result['expert'][$k]['course_intro'] = $expert[$v]['course_intro'];
                    $result['expert'][$k]['course_rank'] = $expert[$v]['course_rank'];
                    $result['expert'][$k]['course_people'] = $expert[$v]['course_people'];
                    $result['expert'][$k]['course_money'] = $expert[$v]['course_money'];
                    $result['expert'][$k]['type_one'] = $expert[$v]['type_one'];
                    $result['expert'][$k]['type_two'] = $expert[$v]['type_two'];
                    $result['expert'][$k]['type_three'] = $expert[$v]['type_three'];
                    $result['expert'][$k]['type_name'] = $expert[$v]['type']['type_name'];
                }
                $result['expert_one'] = array_shift($result['expert']);
                return view('home/list', $result);
            }
            // return view('home/list', $result);
        }
    }
}

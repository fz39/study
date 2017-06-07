<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\model\Type;
use App\model\Course;

class CourseController extends Controller
{
    //当前类是做的，后台的添加课程
    public function course(Request $request){
        $type = new Type();
        $course = new Course();
        if($request->isMethod('post')){
            $course_arr = $request->input();
            // print_r($course_arr);die;
            $result = $course->addCourse($course_arr);
            if($result){
                return redirect('/admin/success/TypeController/type');
            }else{
                return redirect('/admin/fail/TypeController/type');
            }
        }else{
            $type_arr['one'] = $type->typeParent();
            return view('admin/course', $type_arr);
        }
    }
    public function courseName(Request $request){
        $id = $request->input('id');
        // echo $id;die;
        $type = new Type();
        $type_arr = $type->typeParent($id);
        $type_json = json_encode($type_arr);
        echo $type_json;
        
    }
}

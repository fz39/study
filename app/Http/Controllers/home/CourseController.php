<?php

namespace App\Http\Controllers\home;

use App\model\Course;
use App\model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class CourseController extends Controller
{
    public function Course(Request  $request){
        $course = new Course();
        $video = new Video();
        if($request->isMethod('get')){
            $id = $request->input('id');
            $course_arr['course'] = $course->with(['one'=>function($query){$query->select('id', 'type_name');}, 'two'=>function($query){$query->select('id', 'type_name');}, 'type'=>function($query){$query->select('id', 'type_name');},'video'])->where('id', $id)->get()->toArray();
            // 读取文件成为二进制流形式的数据
            // $video = Storage::get($course_arr['course'][0]['video'][0]['video_path']);
            // 读取env目录下的文件
            // env('DB_HOST');
            // print_r($course_arr);die;
            return view('home/course', $course_arr);
        }
    }
}
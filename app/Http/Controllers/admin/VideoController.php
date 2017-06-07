<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Type;
use App\model\Course;
use App\model\Video;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Storage;

class VideoController extends Controller
{
    //当前类是做的，后台的添加课程
    public function video(Request $request){
        $type = new Type();
        $video = new Video();
        if($request->isMethod('post')){
            $video_arr = $request->input();
            $file = $request->file('video');
            // print_r($file);die;
            foreach($file as $k=>$v){
                // 文件是否上传成功
                if ($file[$k]->isValid()) {
                    // 获取文件相关信息
                    $originalName = $file[$k]->getClientOriginalName(); // 文件原名
                    $ext = $file[$k]->getClientOriginalExtension();     // 扩展名
                    // 判断是否是视频文件
                    $allowed_extensions = ["wmv", "mp4", "avi"];
                    if ($ext && !in_array($ext, $allowed_extensions)) {
                        return 'error You may only upload wmv, mp4 or avi.';
                    }
                    $realPath = $file[$k]->getRealPath();   //临时文件的绝对路径
                    // 文件类型
                    $type = $file[$k]->getClientMimeType();     // image/jpeg
                    // 上传文件
                    // $rand = rand(0,99);
                    //uniqid根据微秒计算生产一个唯一ID
                    $filename = date('Y-m-d_H-i-s') . '@' . uniqid() . '.' . $ext;
                    // 使用我们新建的uploads本地存储空间（目录）
                    Storage::disk('local')->put($filename, file_get_contents($realPath));
                    
                    $video_arr['video_path'][$k] = $filename;
                }
                // echo $filename;die;
            }
            $course_id = $video_arr['course_id'];
            $video_name = $video_arr['video_name'];
            array_splice($video_arr, 0,3);
            // print_r($video_arr);die;
            foreach($video_arr['video_path'] as $k=>$v){
                $arr[$k]['video_name'] = $video_name[$k];
                $arr[$k]['video_path'] = $v;
            }
            // print_r($arr);die;
            $result = $video->addVideo($arr, $course_id);
            if($result){
                return redirect('/admin/success/TypeController/type');
            }else{
                return redirect('/admin/fail/TypeController/type');
            }
        }else{
            $type_arr['one'] = $type->typeParent();
            return view('admin/video', $type_arr);
        }
    }
    public function videoCourse(Request $request){
        $three = $request->input('three');
        // echo $id;die;
        $course = new Course();
        $course_arr = $course->courseThree($three);
        $course_json = json_encode($course_arr);
        echo $course_json;
        
    }
}

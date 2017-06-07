<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Video;

class VideoController extends Controller
{
    public function video(Request  $request){
        $video = new Video();
        if($request->isMethod('get')){
            $id = $request->input('id');
            // echo $id;die;
            $path = env('FILE_PATH');
            // 视频文件路径
            $video_arr['video'] = $video->video($id);
            $video_arr['video'][0]['video_path'] = $path.$video_arr['video'][0]['video_path'];
            // print_r($video_arr);die;
            return view('home/video', $video_arr);
        }else{

        }
    }
}

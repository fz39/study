<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function addVideo($arr, $course_id){
        foreach($arr as $k=>$v){
            DB::table('video')->insert([
                ['video_path' => $v['video_path'], 'video_name' => $v['video_name'], 'course_id' => $course_id],
            ]);
        }
        return true;
    }
    public function video($id){
        // echo $id;die;
        if(!empty($id)){
            return $this->select('id','video_name', 'video_path')->where('id', '=', $id)->get()->toArray();
        }
    }
    public function course()
    {
        return $this->belongsTo('App\model\Course', 'course_id');
    }
}

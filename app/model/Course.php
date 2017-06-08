<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function course($id = 0){
        // echo $id;die;
        if($id == 0){
            return $this->select('id','course_name', 'course_intro', 'course_rank', 'course_people', 'course_money', 'type_one', 'type_two', 'type_three')->get()->toArray();
        }else{
            return $this->select('id','course_name', 'course_intro', 'course_rank', 'course_people', 'course_money', 'type_one', 'type_two', 'type_three')->where('id', '=', $id)->get()->toArray();
        }
    }
    public function addCourse($course_arr){
        if(!empty($course_arr['course_money'])){
            $this->course_name = $course_arr['course_name'];
            $this->type_one = $course_arr['one'];
            $this->type_two = $course_arr['two'];
            $this->type_three = $course_arr['three'];
            $this->course_rank = $course_arr['course_rank'];
            $this->course_intro = $course_arr['course_intro'];
            $this->course_money = $course_arr['course_money'];
            return $this->save();
        }else{
            $this->course_name = $course_arr['course_name'];
            $this->type_one = $course_arr['one'];
            $this->type_two = $course_arr['two'];
            $this->type_three = $course_arr['three'];
            $this->course_rank = $course_arr['course_rank'];
            $this->course_intro = $course_arr['course_intro'];
            return $this->save();
        }
        
    }
    public function courseThree($three = 0){
        return $this->select('id', 'course_name')->where('type_three', '=', $three)->get()->toArray();
    }
    public function type()
    {
        return $this->hasOne('App\model\Type', 'id', 'type_three');
    }
    public function two()
    {
        return $this->hasOne('App\model\Type', 'id', 'type_two');
    }
    public function one()
    {
        return $this->hasOne('App\model\Type', 'id', 'type_one');
    }
    public function video()
    {
        return $this->hasMany('App\model\Video', 'course_id', 'id');
    }
    public function typeOne($id = 0){
        return $this->select('id','course_name', 'course_intro', 'course_rank', 'course_people', 'course_money', 'type_one', 'type_two', 'type_three','course_grade','course_number')->where('type_one', '=', $id)->get()->toArray();
    }
    public function typeTwo($id = 0){
        return $this->select('id','course_name', 'course_intro', 'course_rank', 'course_people', 'course_money', 'type_one', 'type_two', 'type_three','course_grade','course_number')->where('type_two', '=', $id)->get()->toArray();
    }
    public function typeThree($id = 0){
        return $this->select('id','course_name', 'course_intro', 'course_rank', 'course_people', 'course_money', 'type_one', 'type_two', 'type_three','course_grade','course_number')->where('type_three', '=', $id)->get()->toArray();
    }
}

<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // 查
    public function typeSel($rank = 0){
        if($rank == 0){
            return $this->select('id', 'type_name', 'type_rank')->where('type_rank', '=', $rank)->get()->toArray();
        }else{
            return $this->select('id', 'type_name', 'parent_id', 'type_rank')->where('type_rank', '=', $rank)->get()->toArray();
        }
    }
    public function typeAdd($arr){
        $this->type_name = $arr['type_name'];
        if(!empty($arr['parent_id'])){
            $this->parent_id = $arr['parent_id'];
        }
        $this->type_rank = $arr['type_rank'];
        return $this->save();
    }
    public function typeHome(){
        return $this->select('id','type_name','parent_id','type_rank')->get()->toArray();
    }
    public function typeParent($parent_id = 0){
        return $this->select('id', 'type_name', 'type_rank')->where('parent_id', '=', $parent_id)->get()->toArray();
    }
}

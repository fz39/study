<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    // 查
    public function typeSel($rank){
        if($rank == 0){
            return $this->select('id','type_name')->where('type_rank', '=', $rank)->get()->toArray();
        }else{
            return $this->select('id','type_name','parent_id')->where('type_rank', '=', $rank)->get()->toArray();
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
}

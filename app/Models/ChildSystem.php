<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildSystem extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function parent(){
    	return $this->belongsTo(ParentSystem::class, 'parent_id');
    }
    
    public function getTableAttribute($data){
        return json_decode(json_decode($data, true));
    }
    
}

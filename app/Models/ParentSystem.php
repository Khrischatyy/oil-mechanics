<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentSystem extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function childs(){
    	return $this->hasMany(ChildSystem::class);
    }
}

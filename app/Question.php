<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Answer;

class Question extends Model
{
    protected $guarded =[];
    
    public function answer()
    {   
        $this->hasMany(Answer::class);
    }
}

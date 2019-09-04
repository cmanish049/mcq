<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;
class Question extends Model
{
    protected $guarded =[];
    
    public function answers()
    {   
        return $this->hasMany(Answer::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Answer extends Model
{
    protected $guarded =[];

    public function question()
    {
        $this->belongsTo(Question::class);
    }
}

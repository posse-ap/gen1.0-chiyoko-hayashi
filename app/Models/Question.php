<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function big_questions()
    {
        return $this->hasMany(BigQuestion::class);
    }


}

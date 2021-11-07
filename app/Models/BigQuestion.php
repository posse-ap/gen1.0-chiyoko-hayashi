<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}

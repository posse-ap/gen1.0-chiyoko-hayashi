<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = ['name','valid']; //保存したいカラム名
}

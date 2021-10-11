<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'name' => 'required'
    );

    public function choices()
    {
        return $this->hasMany('App\Choice');
    }


}

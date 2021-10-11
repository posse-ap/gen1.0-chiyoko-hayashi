<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'choices';
    // protected $guarded = array('id');

    public static $rules = array(
        'id' => 'required',
        'question_id' => 'required',
        'name' => 'required',
        'valid' => 'required'
    );

    // public function question()
    // {
    //     return $this->belongsTo('App\Question');
    // }
}

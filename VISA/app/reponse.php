<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{
    protected $guarded= [];
    public function demande(){
        return $this->belongsTo('App\demande');
    }
}

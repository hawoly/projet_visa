<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destination extends Model
{
    protected $guarded=[];
    public function demandes(){
        return $this->hasMany('App\demande');
    }
}

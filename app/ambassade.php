<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ambassade extends Model
{
    protected $guarded=[];
    public function Users(){
        return $this->hasMany('App\User');
    }
    public function destinations(){
        return $this->hasMany('App\destination');
    }
}

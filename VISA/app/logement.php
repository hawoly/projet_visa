<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logement extends Model
{
    protected $guarded= [];
    public function demandes(){
        return $this->hasMany('App\demande');
    }
}

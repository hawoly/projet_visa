<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rv extends Model
{
    protected $guarded= [];
    public function User(){
        return $this->belongsTo('App\User','User_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recour extends Model
{
    
    protected $guarded=['status'];
    public function User(){
        return $this->belongsTo('App\User','User_id');
    }
}

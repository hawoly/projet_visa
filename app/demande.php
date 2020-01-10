<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class demande extends Model
{
    protected $guarded=['status'];

    public function demandeur(){
        return $this->belongsTo('App\demandeur');
    }
    public function destination(){
        return $this->belongsTo('App\destination');
    }
    public function logement(){
        return $this->belongsTo('App\logement');
    }
    public function reponses(){
        return $this->hasMany('App\reponse');
    }
}

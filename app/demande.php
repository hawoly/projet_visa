<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class demande extends Model
{
    protected $guarded=['status'];

    public function User(){
        return $this->belongsTo('App\User','demandeur_id');
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    //
    protected $guarded=[];

    public function category(){
        return $this->belongsTo('App\category');
    }
}

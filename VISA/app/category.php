<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $guarded=[];

    public function produits(){
        return $this->hasMany(App\produit);
    }
}

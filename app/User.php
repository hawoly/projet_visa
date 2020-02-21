<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];
   
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function ambassade(){
        return $this->belongsTo('App\ambassade');
    }
     public function rvs(){
        return $this->hasMany('App\rv','User_id','id');
    }
    public function demandes(){
        return $this->hasMany('App\demande','demandeur_id','id');
    }


    public function isAdmin(){
        return strtolower(@$this->roles) === 'admin'? true : false;
     }

     
public function isDemandeur(){
   return strtolower(@$this->roles) === 'demandeur'? true : false;
}



}





<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use View;
use Redirect,Response,DB,Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $demande= \App\demande::where('demandeur_id', Auth::user()->id)->get();
       foreach ($demande as $key => $demand) {
        $reponse= \App\reponse::where('demande_id', $demand->id)->get();
       }  
        $recour= \App\recour::where('User_id', Auth::user()->id)->get();
        $destination=\App\destination::pluck('nom_pays','id');
        $typelogement=\App\logement::pluck('typelogement','id');
        $ambassa=\App\ambassade::all();
        $U=\App\demande::where('destination_id', Auth::user()->ambassade_id)->get();
      foreach ($U as $key => $demand) {
       $rv=\App\rv::where('User_id',$demand->demandeur_id)->where('status',0)->get();  
      // dd($rv)  ;         
      }
      foreach ($U as $key => $demand) {
        $recou=\App\recour::where('User_id',$demand->demandeur_id)->where('status',0)->get();
       }

       $users=\App\User::where('roles','admin')->get();
       $ambassade=\App\ambassade::pluck('ambassade','id');
       $user = Auth::user()->roles;
        if($user=='admin')
         return view('demande.list_demande', compact('rv','recou'));
        if($user=='supadmin')
         return view('demande.supadmin', compact('users','ambassade'));
        if($user=='demandeur')
        return view('demandeur.demande', compact('destination','typelogement','demande','reponse','recour'));
    }
}

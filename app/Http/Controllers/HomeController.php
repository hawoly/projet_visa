<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;

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
       $recour= \App\recour::where('reponse_id', Auth::user()->id)->get();
       
        $destination=\App\destination::pluck('nom_pays','id');
        $typelogement=\App\logement::pluck('typelogement','id');
       $rv= \App\rv::all();
 
      
        $user = Auth::user()->roles;
        if($user=='admin')
         return view('demande.list_demande', compact('rv'));
        if($user=='demandeur')
        return view('demandeur.demande', compact('destination','typelogement','demande','reponse','recour'));
    }
}

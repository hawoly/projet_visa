<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
       // return view('accueil');
       return view('index');
    }
   
   
    public function contact(){
        return view('contact');
    }
    public function show(){
        return view('list_country');
    }
}

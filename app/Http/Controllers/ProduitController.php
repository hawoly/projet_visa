<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\produit;
Use App\category;

class ProduitController extends Controller
{
   public function index(){
 
       //$c=produit::where('category_id', 1)->first();
       $prod=produit::all();
       return view('produit.home', compact('prod'));
   }
   public function create(){
    $categories = \App\category::pluck('nom','id');
   return view('produit.create', compact('categories'));

   }
   public function store(Request $request)
    {
        $data = $request->validate([
            'nom'=>'required|min:5',
            'prix' => 'required|numeric',
            'description' => 'required|max:1000000',
            'category_id' => 'required'
        ]);
     
        $produit= new produit();
       $produit->nom=$request->input('nom');
       $produit->prix=$request->input('prix');
       $produit->description=$request->input('description');
       $produit->category_id = $request->input('category_id');
       $produit->save();
        //category::create(['nom'=>$nom]);
        return redirect('/produit');
       

    }

}


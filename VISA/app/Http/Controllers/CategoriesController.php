<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->authorize('admin');
        
        $cat = \App\category::orderBy('created_at', 'DESC')->get();
        return view('categories.index', compact('cat'));
    }
    public function essai(){
        return view('essai');
    }
    public function essayer(){
        return view('categories.essai');
    }
    public function index1(){
        return view('index');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $nom=$request->input('nom');
        
        category::create(['nom'=>$nom]);
        return redirect('/categorie');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = \App\category::find($id);//on recupere le produit
        return view('categories.edit', compact('cat'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat= \App\category::find($id);
   if($cat){
       $cat->update([
           'nom' => $request->input('nom'),      
       ]);
   }
   return redirect('/categorie');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

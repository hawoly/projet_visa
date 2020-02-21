<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use \Auth;
use  App\rv;
use Mail;

class RvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'daterv'    =>  'required',
            'heurerv'    =>  'required',
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $demande= \App\demande::where('demandeur_id', Auth::user()->id)->get();
        foreach ($demande as $key => $demand) {
            $form_data = array(
                'daterv' =>  $request->daterv,
                'heurerv' =>  $request->heurerv,
                'User_id' => $demand->id,         
            );
        }
        
        $form_data = array(
            'daterv' =>  $request->daterv,
            'heurerv' =>  $request->heurerv,
            'User_id' => Auth::user()->id,         
        );
         rv::create($form_data);
         return redirect()->back()->with('messag', 'rv ajoute.');    
    }
    public function confirm($id){
        $dat = rv::findOrFail($id);
      $name=$dat->User->name;
      $email=$dat->User->email;
      $date=$dat->daterv;
      $heure=$dat->heurerv;
      $data=array("name"=> $name,"date"=>$date,"heure"=>$heure
      ,"body"=>" votre rv a ete revenu");
      Mail::send('mail',$data,function($message) use($name,$email){
          $message->to($email)
          ->subject('lessai subject');
    });
  //  dd($dat);
    $dat->status=1;
    $dat->update();
    return redirect()->route('home');  

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
        //
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
        //
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

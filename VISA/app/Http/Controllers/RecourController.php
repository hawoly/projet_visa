<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Auth;
use App\recour;
class RecourController extends Controller
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
    public function creneau(){
        return view('creneau');
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
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'reponse_id'=>'unique:recours',
           'description' => 'required',
           'photo_personnel' => 'required',
           'photo_passport' => 'required',
           'releve_banvaire' => 'required',
           
       ]);
      
           $recour= new recour();
  if($request->has('photo_personnel')){
   $image1 = $request->file('photo_personnel');
   $image_name1 = Str::slug($request->input('name')).'_'.time();
   $folder = '/uploads/personnel/';
   $recour->photo_personnel = $folder.$image_name1.'.'.$image1->getClientOriginalExtension();
   $this->uploadImage($image1, $folder, 'public', $image_name1);
}
if($request->has('photo_passport')){
   $image2 = $request->file('photo_passport');
   $image_name2 = Str::slug($request->input('name')).'_'.time();
   $folder = '/uploads/passport/';
   $recour->photo_passport = $folder.$image_name2.'.'.$image2->getClientOriginalExtension();
   $this->uploadImage($image2, $folder, 'public', $image_name2);
}
if($request->has('releve_banvaire')){
   $image3 = $request->file('releve_banvaire');
   $image_name3 = Str::slug($request->input('name')).'_'.time();
   $folder = '/uploads/releve/';
   $recour->releve_banvaire = $folder.$image_name3.'.'.$image3->getClientOriginalExtension();
   $this->uploadImage($image3, $folder, 'public', $image_name3);
}
       $recour->reponse_id=Auth::user()->id;
       $recour->description=$request->input('description');   
      
    
      $recour->save(); 
        return redirect()->back()->with('messages', 'Data Added successfully');
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

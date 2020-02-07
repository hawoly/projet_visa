<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use \Auth;
use Illuminate\Http\Request;
use App\demande;
use App\destination;
use App\logement;
class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(){
        $demande= \App\demande::where('demandeur_id', Auth::user()->id)->get();
    return view('demandeur.list', compact('demande'));
    }
    public function reponse(){
        $demande= \App\demande::where('demandeur_id', Auth::user()->id)->get();
        return view('demandeur.reponse',compact('demande'));
        }
    public function recour(){
            return view('demandeur.recour');
            }



    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }

    public function index()
    {
       
       
        $demande= \App\demande::where('demandeur_id', Auth::user()->id)->get();
    
        $destination=destination::pluck('nom_pays','id');
       // dd($demande);
        $typelogement=\App\logement::pluck('typelogement','id');
       
        return view('demandeur.demande', compact('destination','typelogement','demande'));
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
            $data = $request->validate([
             'prenom'=>'required',
             'demandeur_id'=>'unique',
             'date_naissance'=>'required|date',
             'lieu_naissance'=>'required',
             'adresse'=>'required',
             'tel'=>'required',
            'motif_demande'=>'required',
            'date_prevu_depart'=>'required|date|after:date_naissance',
            'destination_id'=>'required',
            'duree_sejour'=>'required',
            'lieu_residence' => 'required',
            'typelogement_id' => 'required',
            'photo_personnel' => 'required',
            'photo_passport' => 'required',
            'releve_banvaire' => 'required'
        ]);
       
       
            $demande= new demande();
   if($request->has('photo_personnel')){
    $image1 = $request->file('photo_personnel');
    $image_name1 = Str::slug($request->input('name')).'_'.time();
    $folder = '/uploads/personnel/';
    $demande->photo_personnel = $folder.$image_name1.'.'.$image1->getClientOriginalExtension();
    $this->uploadImage($image1, $folder, 'public', $image_name1);
}
if($request->has('photo_passport')){
    $image2 = $request->file('photo_passport');
    $image_name2 = Str::slug($request->input('name')).'_'.time();
    $folder = '/uploads/passport/';
    $demande->photo_passport = $folder.$image_name2.'.'.$image2->getClientOriginalExtension();
    $this->uploadImage($image2, $folder, 'public', $image_name2);
}
if($request->has('releve_banvaire')){
    $image3 = $request->file('releve_banvaire');
    $image_name3 = Str::slug($request->input('name')).'_'.time();
    $folder = '/uploads/releve/';
    $demande->releve_banvaire = $folder.$image_name3.'.'.$image3->getClientOriginalExtension();
    $this->uploadImage($image3, $folder, 'public', $image_name3);
}
        $demande->demandeur_id=Auth::user()->id;
        //$demande->Nambassade=Auth::user()->ambassade_id;
        $demande->prenom=$request->input('prenom');
        $demande->date_naissance=$request->input('date_naissance');
        $demande->lieu_naissance=$request->input('lieu_naissance');
        $demande->adresse=$request->input('adresse');
        $demande->tel=$request->input('tel');
       $demande->motif_demande=$request->input('motif_demande');
       $demande->date_prevu_depart=$request->input('date_prevu_depart');
       $demande->destination_id=$request->input('destination_id');
       $demande->duree_sejour=$request->input('duree_sejour');
       $demande->lieu_residence=$request->input('lieu_residence');
       $demande->logement_id=$request->input('typelogement_id');     
       
     
       $demande->save(); 
      // $list=$demande; 
        //return redirect('demander');
        // return "Data Added successfully.";
         return redirect()->back()->with('message', 'Data Added successfully');

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

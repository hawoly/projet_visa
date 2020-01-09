<?php
namespace App\Http\Controllers;
use \App\demande;
use \App\reponse;
use \App\User;
use Auth;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use DataTables;
use Validator;
class AdminController extends Controller
{
    public function index()
    {
        return view('demande.list_demande');     
    }
    public function List()
    {
        $demande = DB::table('demandes')
        ->join('users', 'users.id', '=', 'demandes.demandeur_id')
        ->join('logements', 'logements.id', '=', 'demandes.logement_id')
        ->join('destinations', 'destinations.id', '=', 'demandes.destination_id')
        ->select('demandes.id','demandeur_id','users.name','prenom','date_naissance','lieu_naissance','adresse',
        'tel','motif_demande','destination_id','destinations.nom_pays','logement_id','logements.typelogement','date_prevu_depart','lieu_residence','duree_sejour','photo_personnel',
        'photo_passport','releve_banvaire')->where('status', 0);
        return datatables()->of($demande)  
        ->addColumn('action', function($demande){
            $button = '<button type="button" name="accept" id="'.$demande->id.'" class="accept btn btn-primary btn-sm">Accepter</button>';
            $button .= '&nbsp;&nbsp;&nbsp;<button type="submit" name="rejet" id="'.$demande->id.'" class="rejet btn btn-danger btn-sm">rejeter</button>'; 
            return $button;
        })
        ->rawColumns(['action'])
            ->make(true);           
    }
    public function store(Request $request)
    {
       

        $rules = array(
            'motif_reponse'    =>  'required'
        );
        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
       
        $form_data = array(
            'motif_reponse' =>  $request->motif_reponse,
            'reponse' => "rejet",
               
        );
 
         reponse::create($form_data);
  
         return response()->json(['success' => 'motif ajoute.']);
    }
   public function rejet($id){
        $data = demande::findOrFail($id);
        $data->status=1;
        $data->reponse=$id;
        $data->update();   
        $da = reponse ::latest('id')->first()->id;    
        $data = reponse::findOrFail($da);
        $data->demande_id=$id;
        $data->update();    
    }
  /*public function rejett($id){
    $da = reponse ::orderBy('id', 'desc')->first()->id;
    $d=$da;
    $data = reponse::findOrFail($d);
    $data->demande_id=$id;
    $data->update();
 
    
  }*/
    public function accept($id){
        $data = demande::findOrFail($id);
        $data->status=2;
        $data->reponse=$id;
        $data->update();
    }
   


 
  
}

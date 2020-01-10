<?php

namespace App\Http\Controllers;

use App\logement;
use Illuminate\Http\Request;
use DataTables;
use Validator;
class LogementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = logement::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit1 btn btn-primary btn-sm">Modifier</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete1 btn btn-danger btn-sm">Supprimer</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('demande.logement');
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
            'typelogement'    =>  'required|unique:logements|max:255'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'typelogement'        =>  $request->typelogement
        );
   
         logement::firstOrCreate($form_data);
         return response()->json(['success' => 'Data Added successfully.']);

        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function show(logement $logement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = logement::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, logement $logement)
    {
        $rules = array(
            'typelogement'        =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'typelogement'    =>  $request->typelogement
        );

        logement::whereId($request->hidden_id1)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = logement::findOrFail($id);
        $data->delete();
    }
}

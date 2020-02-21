@extends('layouts.layout')
@section('content')
<br><br>

        <div id="col1">
       <center> <h1>information detaillee de la demande</h1></center>
        <table class="table table-hover">
        <tr><td scope="row">NOM</td> 
        <td>PRENOM</td>
        <td>ADRESSE</td>
        <td>MOTIF DEMANDE</td><td>DATE DE NAISSANCE</td><TD> LIEU DE NAISSANCE</TD>
        <TD>DATE PREVU DEPART</TD><TD>LIEU RESIDENCE</TD><TD>DUREE SEJOUR</TD>
        <TD>DESTINATION</TD><TD>LOGEMENT</TD><TD>PHOTO PERSONNEL</TD>
        <TD>PASSPORT</TD>  <TD>REVELE BANCAIRE</TD></tr>

@foreach($data as $da)
    <tr><td>{{$da->User->name??''}}</td>
      <td>{{$da->prenom}}</td>
      <td>{{$da->adresse}}</td>
      <td>{{$da->motif_demande}}</td>
      <td>{{$da->date_naissance}}</td> 
      <td>{{$da->lieu_naissance}}</td> 
      <td>{{$da->date_prevu_depart}}</td> 
      <td>{{$da->lieu_residence}}</td> 
      <td>{{$da->duree_sejour}}</td>  
      <td>{{$da->destination->nom_pays}}</td> 
      <td>{{$da->logement->typelogement}}</td> 
     <td><img src="{{$da->photo_personnel ? asset($da->photo_personnel) : asset('uploads/personnel/default.png')}}" 
           alt="{{$da->name}}" width="50"></td>
      <td><img src="{{$da->photo_passport  ? asset($da->photo_passport ) : asset('uploads/passport/default.png')}}" 
           alt="{{$da->name}}" width="50"></td>
     <td><img src="{{$da->releve_banvaire ? asset($da->releve_banvaire) : asset('uploads/releve/default.png')}}" 
           alt="{{$da->name}}" width="50"></td>  </tr>
 @endforeach
        </table>
        
        </div><br><br><br>
       
        <div id="col2">   
        <center><h1>detail reponse</h1></center>
         <table class="table">
@foreach($reponse as $rep)
     <tr><td>motif</td> <td>{{$rep->motif_reponse}}</td></tr>
 @endforeach
        </table></div><br><br><br>
        <div id="col3"> 
        <center><h1>detail recours</h1></center>
        <table class="table">
        <tr><td>motif</td> 
        <TD>PHOTO PERSONNEL</TD>
        <TD>PASSPORT</TD>
          <TD>REVELE BANCAIRE</TD>
        </tr>
@foreach($recour as $r)
     <tr> <td>{{$r->description}}</td>
     <td><img src="{{$r->photo_personnel ? asset($r->photo_personnel) : asset('uploads/personnel/default.png')}}" 
           alt="{{$da->name}}" width="50"></td>
      <td><img src="{{$r->photo_passport  ? asset($r->photo_passport ) : asset('uploads/passport/default.png')}}" 
           alt="{{$r->name}}" width="50"></td>
     <td><img src="{{$r->releve_banvaire ? asset($r->releve_banvaire) : asset('uploads/releve/default.png')}}" 
           alt="{{$r->name}}" width="50"></td></tr>
 @endforeach
        </table> </div>

        <br><br><br>

        <div>
       
        <a href="{{route('rejet',['id'=>$da->id,'dd'=>$rep->id])}}" type="button" class="accept btn btn-primary btn-sm">rejeter</a> &nbsp;&nbsp;&nbsp;
       <a href="{{route('accept',['id'=>$da->id,'dd'=>$rep->id])}}" type="button"  class="rejet btn btn-danger btn-sm">accepter</a>
       
              </div>
@endsection
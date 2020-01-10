@extends('home')

@section('contenu')


<div class="onglets_html">
        <div class="onglets">
            <div class="onglet_n onglet"><a href="{{ url('demande') }}">demande</a></div>
            <div class="onglet_y onglet"><a href="{{ url('list') }}">list</a></div>
            <div class="onglet_n onglet"><a href="{{ url('reponse') }}">reponse</a></div>
            <div class="onglet_n onglet"><a href="{{ url('recours') }}">recours</a></div>

        </div>
        <div class="contenu">
         
<table class="table">
  <thead>
    <tr>
        <th  scope="col"><strong>MOTIF</strong></th>
        <th  scope="col"><strong> DATE PREVU DEDEPART</strong></th>
        <th  scope="col"><strong>PAYS</strong></th>
        
        <th  scope="col"><strong>type logement</strong></th>
        <th  scope="col"><strong>DUREE SEJOUR</strong></th>
        <th scope="col"><strong>PHOTO PERSONNEL</strong></th>
        <th scope="col"><strong>PHOTO PERSONNEL</strong></th>
        <th scope="col"><strong>PHOTO PERSONNEL</strong></th>
    </tr>
</thead>
<tbody>
@foreach($demande as $demand)
        <tr>
            <td>{{$demand->motif_demande}}</td>
            <td>{{$demand->date_prevu_depart}}</td>
            <td>{{$demand->destination->nom_pays??''}}</td>
          
           <td>{{$demand->logement->typelogement??''}}</td>
           <td>{{$demand->duree_sejour}}</td>
           <td><img src="{{$demand->photo_personnel ? asset($demand->photo_personnel) : asset('uploads/personnel/default.png')}}" 
           alt="{{$demand->name}}" width="50"></td>
           <td><img src="{{$demand->photo_passport  ? asset($demand->photo_passport ) : asset('uploads/passport/default.png')}}" 
           alt="{{$demand->name}}" width="50"></td>
           <td><img src="{{$demand->releve_banvaire ? asset($demand->releve_banvaire) : asset('uploads/releve/default.png')}}" 
           alt="{{$demand->name}}" width="50"></td>
        </tr>

        @endforeach
        </tbody>
</table>
        </div>
    </div>

@endsection
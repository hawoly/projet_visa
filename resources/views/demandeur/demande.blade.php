@extends('layouts.layout')

@section('content')
<br><br>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">faire une demande</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">voir demande</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">voir reponse</a>
    <a class="nav-item nav-link" id="nav-recour-tab" data-toggle="tab" href="#nav-recour" role="tab" aria-controls="nav-recour" aria-selected="false">faire recour</a>
    <a class="nav-item nav-link" id="nav-RV-tab" data-toggle="tab" href="#nav-RV" role="tab" aria-controls="nav-RV" aria-selected="false">Prendre RV</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  
  
  <div>

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('alerter'))
    <div class="alertalert-danger">
        {{ session()->get('alerter') }}
    </div>
@endif
</div>
<form class="text-center border border-light p-5" action="/demande/traitement" method="post"
enctype="multipart/form-data">

@csrf
<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">FICHE DE DEMANDE</p><br>


<input type="text" name="prenom" class="form-control mb-4" placeholder="PRENOM">
<input type="text" placeholder="DATE DE NAISSANCE" onfocus="(this.type='date')"  name="date_naissance" class="form-control mb-4" placeholder="DATE DE NAISSANCE">
<input type="text" name="lieu_naissance" class="form-control mb-4" placeholder="LIEU DE NAISSANCE">
<input type="text" name="adresse" class="form-control mb-4" placeholder="ADRESSE">
<input type="text" name="tel" class="form-control mb-4" placeholder="TELEPHONE">
<input type="text" name="motif_demande" class="form-control mb-4" placeholder="MOTIF DEMANDE">
<input   type="text"  name="date_prevu_depart" class="form-control mb-4" placeholder="DATE PREVU DE DEPART" onfocus="(this.type='date')" id=""   >
<select name="destination_id" id="destination_id" class="form-control mb-4" >
<option value="" hidden >choisir le pays</option>
@foreach($destination as $key => $value)
    <option value="{{$key}}">{{$value}}</option>
@endforeach

</select>

<input type="text" name="duree_sejour" class="form-control mb-4" placeholder="DUREE SEJOUR">
<input type="text"  name="lieu_residence" class="form-control mb-4" placeholder="LIEU DE RESIDENCE">

<select name="typelogement_id" id="typelogement_id" class="form-control mb-4" >
<option value="" hidden>choisir le type de logement</option>
@foreach($typelogement as $key => $value)
    <option value="{{$key}}">{{$value}}</option>
@endforeach
</select>

<div class="custom-file mb-4 c">
<input type="file" class="custom-file-input"  name="photo_personnel" lang="fr">
<label class="custom-file-label" >PHOTO PERSONNEL </label>
</div>
<div class="custom-file mb-4 v">
<input type="file" class="custom-file-input"  name="photo_passport" lang="fr">
<label class="custom-file-label" >PHOTO PASSPORT </label>
</div>
<div class="custom-file n">
<input type="file" class="custom-file-input"  name="releve_banvaire" lang="fr">
<label class="custom-file-label" >RELEVE BANCAIRE </label>
</div>
<br><br>

<!-- <button class="btn btn-info my-8 btn-block" type="submit">Valider</button>-->
<button type="submit" class="btn btn-primary b">valider</button>
</form>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  
          
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
</table> <br><br><br><br><br><br>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">         
<table class="table">
<tbody>
@foreach($demande as $demand)
        <tr>
        @forelse ($recour as $rec)
        @if($rec->status==0)
        <td scope="col"><strong>REPONSE</strong></td>
        <td>  <h2  class="text-info">en attente</h2> </td>
        @endif
        @if($rec->status==2)
        <td scope="col"><strong>REPONSE</strong></td>
        <td> <h2 class="text-success">accepte</h2> </td>
        @endif
       @empty

        <td scope="col"><strong>REPONSE</strong></td>
            @if($demand->status==0)
            <td>  <h2  class="text-info">en attente</h2> </td>
            @endif
            @if($demand->status==1)
            <td><h2 class="text-danger">rejete</h2> </td>
            @foreach($reponse as $rep)
            <tr><td scope="col"><strong>MOTIF</strong></td>
            <td>{{$rep->motif_reponse}}</td></tr>
             @endforeach
            @endif
            @if($demand->status==2)
            <td> <h2 class="text-success">accepte</h2> </td>
            @endif
            @endforelse
        </tr>
        @endforeach
        </tbody>
</table>
<br><br><br><br><br><br><br>
  </div>
  <div class="tab-pane fade" id="nav-recour" role="tabpanel" aria-labelledby="nav-recour-tab">
  @foreach($demande as $demand)
  @if($demand->status==1)
  <div>

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
@if(session()->has('messages'))
    <div class="alert alert-success">
        {{ session()->get('messages') }}
    </div>
@endif
@if(session()->has('alertert'))
    <div class="alert alert-danger">
        {{ session()->get('alertert') }}
    </div>
@endif
</div>
<form class="text-center border border-light p-5" action="/recours/traitement" method="post"
enctype="multipart/form-data">

@csrf
<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">RECOURS</p><br>


<!--Textarea with icon prefix-->
<div class="md-form  mb-4">
<label for="form10">DESCRIPTION</label> <i class="fas fa-pencil-alt prefix"></i>
  <textarea id="description"  name="description" class="md-textarea form-control" rows="3"></textarea>
  
</div>
<div class="custom-file mb-4 c">
<input type="file" class="custom-file-input"  name="photo_personnel" lang="fr">
<label class="custom-file-label" >PHOTO PERSONNEL </label>
</div>
<div class="custom-file mb-4 v">
<input type="file" class="custom-file-input"  name="photo_passport" lang="fr">
<label class="custom-file-label" >PHOTO PASSPORT </label>
</div>
<div class="custom-file n">
<input type="file" class="custom-file-input"  name="releve_banvaire" lang="fr">
<label class="custom-file-label" >RELEVE BANCAIRE </label>
</div>
<br><br>

<!-- <button class="btn btn-info my-8 btn-block" type="submit">Valider</button>-->
<button type="submit" class="btn btn-primary b">valider</button>
</form>
@endif
@endforeach

</div>

<br><br>
<div class="tab-pane fade" id="nav-RV" role="tabpanel" aria-labelledby="nav-RV-tab">

@foreach($demande as $demand)
@if($demand->status==2)
      
         

<div>

@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif
@if(session()->has('messag'))
    <div class="alert alert-success">
        {{ session()->get('messag') }}
    </div>
@endif
@if(session()->has('alertert'))
    <div class="alert alert-danger">
        {{ session()->get('alertert') }}
    </div>
@endif
</div>
<form class="text-center border border-light p-5" action="/rv/traitement" method="post"
enctype="multipart/form-data">

@csrf
<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">RENDEZ VOUS POUR LE TAMPON</p><br>


<input type="text" onfocus="(this.type='date')"  name="daterv" class="form-control mb-4" placeholder="veuillez choisir une date ">
<input type="text" onfocus="(this.type='time')"  name="heurerv" class="form-control mb-4" placeholder="veuillez choisir une heure ">
<br><br>
<button type="submit" class="btn btn-primary b">valider</button>
</form>
@endif
@endforeach

</div>
<br><br><br><br><br><br>
</div>
 

@endsection
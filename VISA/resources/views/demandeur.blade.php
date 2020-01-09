@extends('home')

@section('contenu')

    
      
                
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
          aria-expanded="true" aria-controls="collapseOne">
        <h1>FAIRE UNE DEMANDE</h1>
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
      data-parent="#accordionExample">
      <div class="card-body">
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
<option vvalue="" hidden>choisir le type de logement</option>
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
      </div>
    </div>
  
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <h1>VOIR DEMANDE</h1>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <br>

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
  </div>
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <h1>VOIR REPONSE</h1>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <br>

<table class="table">

<tbody>
@foreach($demande as $demand)
 
    
        <tr>
            <td scope="col"><strong>REPONSE</strong></td>
            @if($demand->status==0)
            <td>  <h2  class="text-info">en attente</h2> </td>
            @endif
            @if($demand->status==1)
            <td><h2 class="text-danger">rejete</h2> </td>
            @endif
            @if($demand->status==2)
            <td> <h2 class="text-success">accepte</h2> </td>
            @endif
        </tr>

        @endforeach
        </tbody>
</table>

      </div>
    </div>
  </div>
</div>          
                
  
       
@endsection

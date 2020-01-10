
 <!--Accordion wrapper-->
 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          FAIRE UNE DEMANDE
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
</div>
<form class="text-center border border-light p-5" action="/demande/traitement" method="post">
@csrf
<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">FICHE DE DEMANDE</p><br>


<input type="text"  name="demandeur_id" class="form-control mb-4" placeholder="demandeur">

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
@foreach($type as $key => $value)
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
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          VOIR DEMANDE
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       <form class="text-center border border-light p-5" action="#" method="post">

<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">FICHE DE DEMANDE</p><br>
<input type="text" id="defaultRegisterFormFirstName" name="nom" class="form-control mb-4 py-4" placeholder="NOM">
<input type="text" id="defaultRegisterFormLastName" name="prenom" class="form-control mb-4" placeholder="PRENOM">
<select class="browser-default custom-select  mb-4 ca">
  <option  disabled selected>GENRE</option>
  <option value="1">feminin</option>
  <option value="2">masculin</option>   
</select>
<select class="browser-default custom-select  mb-4 va">
  <option  disabled selected>SITUATION MATRIMONIALE</option>
  <option value="1">celibataire</option>
  <option value="2">marie(e)</option>  
  <option value="3">divorce(e)</option>  
  <option value="4">veuf(ve)</option> 
</select>
<input type="date" id="defaultRegisterFormLastName" name="datenaiss" class="form-control mb-4 py-4" placeholder="DATE DE NAISSANCE">
<input type="text" id="defaultRegisterFormLastName" name="lieunaiss" class="form-control mb-4" placeholder="LIEU DE NAISSANCE">

<input type="text" id="defaultRegisterFormEmail" name="nationalite" class="form-control mb-4" placeholder="NATIONALITE">
<input type="text" id="defaultRegisterFormEmail" name="adresse" class="form-control mb-4" placeholder="ADRESSE">
<input type="text" id="defaultRegisterFormEmail" name="fonction" class="form-control mb-4" placeholder="FONCTION">
<input type="text" id="defaultRegisterPhonePassword" name="tel" class="form-control mb-4" placeholder="TELEPHONE" aria-describedby="defaultRegisterFormPhoneHelpBlock">
<input type="text" id="defaultRegisterFormEmail" name="motif" class="form-control mb-4" placeholder="MOTIF DEMANDE">
<input type="text" id="defaultRegisterFormEmail" name="departprevu" class="form-control mb-4" placeholder="DATE PREVU DE DEPART">
<input type="text" id="defaultRegisterFormEmail" name="pays" class="form-control mb-4" placeholder="PAYS DEMANDE">
<input type="text" id="defaultRegisterFormEmail" name="sejour" class="form-control mb-4" placeholder="DUREE SEJOUR">
<input type="text" id="defaultRegisterFormEmail" name="lieuresidence" class="form-control mb-4" placeholder="LIEU DE RESIDENCE">
<input type="text" id="defaultRegisterFormEmail" name="typeresidence" class="form-control mb-4" placeholder="TYPE DE RESIDENCE">


<div class="custom-file mb-4 c">
    <input type="file" class="custom-file-input" id="customFileLang" name="personnel" lang="fr">
    <label class="custom-file-label" for="customFileLang">PHOTO PERSONNEL </label>
  </div>
  <div class="custom-file v">
    <input type="file" class="custom-file-input" id="customFileLang" name="passport" lang="fr">
    <label class="custom-file-label" for="customFileLang">PHOTO PASSPORT </label>
  </div>
  <div class="custom-file n">
    <input type="file" class="custom-file-input" id="customFileLang" name="releve" lang="fr">
    <label class="custom-file-label" for="customFileLang">RELEVE BANCAIRE </label>
  </div>
  <br><br>
  
<!-- <button class="btn btn-info my-8 btn-block" type="submit">Valider</button>-->
<button type="submit" class="btn btn-primary b">valider</button>
</form>
      </div>
    </div>
  </div>
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          VOIR REPONSE
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

<!-- Default form register -->

<!-- Default form register -->

      
 
</body>
</html>

<html>
    <head>
        <title>Django Girls blog</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link href='//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{% static 'css/blog.css' %}">
    </head>
    <body>
        <div class="page-header">
            <h2><a href="{{route('essai')}}" class="top-menu">essai<span class="glyphicon glyphicon-plus"></span></a></h2>
            
        </div>
<div class="container">
    <form class="text-center border border-light p-5" action="#" method="post">
     @csrf
<p class=" card-header info-color white-text text-center py-3 w-20 p-10 title h1 my-10">FICHE DE DEMANDE</p><br>
<input type="text" id="defaultRegisterFormFirstName" name="nom" class="form-control mb-4" placeholder="NOM">
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
<input type="date" id="defaultRegisterFormLastName" name="datenaiss" class="form-control mb-4" placeholder="DATE DE NAISSANCE">
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
</body>
</html>
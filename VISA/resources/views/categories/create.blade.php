
<div class="container">
    <form action="/categorie/traitement" method="post">
     @csrf
    <div class="row"><input type="text" name="nom"  class="form-control"
placeholder="Nom categorie">
</div>

<div class="row">
<button class="btn btn-primary">Valider</button>
</div>

    </form>
</div>

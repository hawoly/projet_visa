
<div class="container">
<form action="{{route('update_categorie',['id'=>$cat->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="nom" class="form-control"
     value="{{$cat->nom}}"></div>
   
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
</div>



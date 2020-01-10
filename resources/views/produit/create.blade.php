@extends('layout')
@section('contenu')

<br><br><br><br><br><br>

<div class="container">
       
       <div class="container">
       @if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif

           <form action="/produit/traitement" method="post">
               @csrf
               <div>
                   <input type="text" name="nom" class="form-control" placeholder="le nom du produit">
               </div>
               <div>
                   <input type="text" name="prix" class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <div>
   <select name="category_id" id="category_id" class="form-control" >
       <option value="choisir la categorie"></option>
       @foreach($categories as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
   </select>
</div>

               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>

@endsection
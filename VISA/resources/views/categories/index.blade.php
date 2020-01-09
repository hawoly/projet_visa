@extends('layout')
@section('contenu')
<br><br><br><br><br><br>
<div class="col">
<a href="{{route('create_categorie')}}" class="btn btn-primary">ajouter une categorie</a>
</div>
<div class="container">
<br>
<table class="table table-striped">
       <tr>
           <th>#</th>  
          <th>Nom catgorie</th>
          <th>action</th>       
       </tr>
       @foreach($cat as $c)
           <tr>
               <th>#</th>
               <th>{{$c->nom}}</th>
               <th>
           <p><a href="{{route('editer_categorie',['id'=>$c->id])}}" class="text-primary">Editer</a>
</p>  </th>

           </tr>
       @endforeach
   </table>
   
   </div>
   @endsection
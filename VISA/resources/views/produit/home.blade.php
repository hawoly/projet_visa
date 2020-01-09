@extends('layout')
@section('contenu')

<br><br><br><br><br><br>
<div class="container">
<table class="table">
  <thead>
    <tr>
        <th  scope="col"><strong>NOM</strong></th>
        <th  scope="col"><strong> DESCRIPTION</strong></th>
        <th  scope="col"><strong>PRIX</strong></th>
        <th  scope="col"><strong>CATEGORIE</strong></th>
    </tr>
</thead>
<tbody>
        @foreach($prod as $pr)
        <tr>
            <td>{{$pr->nom}}</td>
            <td>{{$pr->description}}</td>
            <td>{{$pr->prix}}</td>
           <td>{{$pr->category->nom??''}}</td>
        </tr>
        @endforeach
        </tbody>
</table>
</div>
@endsection




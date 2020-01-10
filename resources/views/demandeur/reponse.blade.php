@extends('home')

@section('contenu')


<div class="onglets_html">
        <div class="onglets">
            <div class="onglet_n onglet"><a href="{{ url('demande') }}">demande</a></div>
            <div class="onglet_n onglet"><a href="{{ url('list') }}">list</a></div>
            <div class="onglet_y onglet"><a href="{{ url('reponse') }}">reponse</a></div>
            <div class="onglet_n onglet"><a href="{{ url('recours') }}">recours</a></div>
        </div>
        <div class="contenu">
           
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
@endsection
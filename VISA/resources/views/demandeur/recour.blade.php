@extends('home')

@section('contenu')


        <div class="onglets_html">
        <div class="onglets">
            <div class="onglet_n onglet"><a href="{{ url('demande') }}">demande</a></div>
            <div class="onglet_n onglet"><a href="{{ url('list') }}">list</a></div>
            <div class="onglet_n onglet"><a href="{{ url('reponse') }}">reponse</a></div>
            <div class="onglet_y onglet"><a href="{{ url('recours') }}">recours</a></div>
        </div>
        <div class="contenu">
      





        </div>
    </div>
    @endsection
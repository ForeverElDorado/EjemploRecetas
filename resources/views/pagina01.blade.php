@extends('layouts.ejemplolayout')


@section('titulo', 'RECETARIUM')


@section('barralateral')

@endsection



@section('contenido')
    <h1>RECETARIUM</h1>
    <br>
<div class="container">
    <p>El Recetarium es una página donde poder ver una serie de recetas faciles y sencillas
    al alcance de un mercadona. Estas recetas estan escritas a mano por nosotros, las erratas se iran corrigiendo
    ya que esto es una version BETA. </p>
</div>

<a href="{{ url('recetas', ['Entrantes']) }}" class="btn btn-xs btn-info pull-rigth">Entrantes </a>
<a href="{{ url('recetas', ['Platos']) }}" class="btn btn-xs btn-info pull-rigth">Platos </a> 
<a href="{{ url('recetas', ['Postres']) }}" class="btn btn-xs btn-info pull-rigth">Postres </a> 
@endsection
@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')


@section('barralateral')

<p> Esta parte está en la barra lateral</p>
@endsection



@section('contenido')
<p> Este está en el body</p>

<a href="{{ url('pagina02/Entrantes') }}" class="btn btn-xs btn-info pull-rigth">Entrantes </a> <!-- //y aquí se pondría Crypt::encrypt(0) -->
<a href="{{ url('pagina02/Platos') }}" class="btn btn-xs btn-info pull-rigth">Platos </a> <!-- //y aquí se pondría Crypt::encrypt(0) -->
<a href="{{ url('pagina02/Postres') }}" class="btn btn-xs btn-info pull-rigth">Postres </a> <!-- //y aquí se pondría Crypt::encrypt(0) -->


@endsection
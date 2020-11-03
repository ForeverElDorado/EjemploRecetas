@extends('layouts.ejemplolayout')
<style>
    button {
        /*la separación entre los botones*/
        margin: 10 0 10 0 !important;
    }
</style>
<script scriptsrc="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <a href="{{ url('tutorials', [$recetas[0]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[0]->nombre}} </a>
            <!-- //y aquí se pondría Crypt::encrypt(0) -->
            <Br>
            <a href="{{ url('tutorials', [$recetas[1]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[1]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[2]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[2]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[3]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[3]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[4]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[4]->nombre}} </a>
            <Br>
            <a href="{{ url('api/tutorials', ['nombre']) }}" class="btn btn-xs btn-info pull-rigth">Historia pero un json solo </a>

        </div>
        <div class="col-3">

        </div>
    </div>
</div>
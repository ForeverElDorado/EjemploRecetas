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
        <a href="{{ url('tutorial', ['Entrantes']) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[0]->nombre}} </a> <!-- //y aquí se pondría Crypt::encrypt(0) -->
        
        </div>
        <div class="col-3">

        </div>
    </div>
</div>
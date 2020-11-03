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
        {{$tutorials[0]->nombre}}
        </div>
        <div class="col-6">
        {{$tutorials[0]->tutorial}}
        <br>        
        </div>
       
        <div class="col-3">
        {{$tutorials[0]->ingredientes}}
        </div>
    </div>
</div>
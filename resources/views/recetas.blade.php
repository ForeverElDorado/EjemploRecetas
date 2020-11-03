<style>
    a {
        /*la separación entre los botones*/
        margin: 20 0 10 150 !important;

    }
</style>
<script scriptsrc="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <a href="{{ url('tutorials', [$recetas[0]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[0]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[1]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[1]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[2]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[2]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[3]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[3]->nombre}} </a>
            <Br>
            <a href="{{ url('tutorials', [$recetas[4]->nombre]) }}" class="btn btn-xs btn-info pull-rigth">{{$recetas[4]->nombre}} </a>
            <Br>
        </div>
        <div class="col-3">
        <a href="{{ url('/') }}" class="btn btn-xs btn-danger pull-rigth">Atras </a>

        </div>
    </div>
</div>
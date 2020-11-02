<?php

namespace App\Http\Controllers;

use App\Recetas;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    //
    public function devuelve_plato($tipo){
        return Recetas:: where('tipo', $tipo)->orderBy(); 
    }
    
    public function carga_plato($tipo){
        return view('recetas')->with('recetas', Recetas::where('tipo', $tipo)->orderBy('id')->limit(1)->get())
                               ->with('tipo', $tipo);

    }
}

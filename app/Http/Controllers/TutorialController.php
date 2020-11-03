<?php

namespace App\Http\Controllers;

use App\Tutorials;

use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //
    public function devuelve_plato2($nombre){
        return Tutorials:: where('nombre', $nombre)->orderBy(); 
    }
    
    public function carga_plato2($nombre){
        return view('tutorials')->with('tutorials', Tutorials::where('nombre', $nombre)->orderBy('nombre')->get())
                               ->with('nombre', $nombre);

    }
}

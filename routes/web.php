<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pagina01');
});
Route::get('/pagina02/{tipo}', function ($tipo) {
    return view('pagina02', ['tipo' => $tipo]);
});
Route::get('recetas/{tipo}', 'RecetaController@carga_plato');
Route::get('tutorials/{nombre}', 'TutorialController@carga_plato2');

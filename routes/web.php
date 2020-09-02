<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/race', 'RaceController@list'); 
Route::get('/equipe/creer', 'EquipeController@creer');
Route::post('/equipe/creer', 'EquipeController@enregistrer');
Route::get('/equipe/modifier', 'EquipeController@modifier');
Route::post('/equipe/modifier', 'EquipeController@afficherEquipe');
//Route::get('/equipe/{id}', 'EquipeController@afficher');
Route::post('/joueur/creer', 'JoueurController@enregistrer');
Route::get('/equipe/{id}', 'JoueurController@list');
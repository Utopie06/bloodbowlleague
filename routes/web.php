<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RaceController;
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
    return view('welcome');
});
Route::get('/race', 'RaceController@list'); 
Route::get('/equipe/creer', 'EquipeController@creer');
Route::post('/equipe/creer', 'EquipeController@enregistrer');
Route::get('/equipe/modifier', 'EquipeController@modifier');
Route::post('/equipe/modifier', 'EquipeController@afficherEquipe');
Route::get('/equipe/{id}', 'EquipeController@afficher');

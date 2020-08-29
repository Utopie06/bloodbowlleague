<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Equipe;
use Illuminate\Http\Request;
use App\Race;
use App\Equipe\modifier;

class EquipeController extends Controller
{
    public function list(){
        return view('Equipe', ['equipes' => Equipe::all()]);
        
    }
    public function creer(){
        return view('creerEquipe', ['races' => Race::all()]);
       
    } 
    
    public function modifier(Request $request){
        return view('modifierEquipe', ['equipes' => Equipe::all()]);
    }
    
    public function enregistrer(Request $request){
        $input = $request->all();   
        $equipe = new Equipe;
        $equipe->name = $input['name'];
        $equipe->race_id = $input['race'];
        $equipe->save();
        return view('welcome'); 
    } 
    
    public function afficherEquipe(Request $request){
              $input = $request->all();
              return redirect()->to("/equipe/".$input['equipe']);
    }
    
    public function afficher($id){
             return view('creerJoueur'); 
    }
}


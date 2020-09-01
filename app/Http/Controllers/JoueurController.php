<?php
namespace App\Http\Controllers;

use App\Equipe;
use Illuminate\Http\Request;
use App\Race;
use App\Joueur;

class JoueurController extends Controller

{
    public function list(){
        return view('joueur', ['joueurs' => Joueur::all()]);
        
    }
    public function creer(){
        return view('creerJoueur', ['races' => Race::all() , 'equipe' => Joueur::all()]);
       
    } 
    
    public function modifier(Request $request){
        return view('modifierEquipe', ['equipes' => Equipe::all()]);
    }
    
    public function enregistrer(Request $request){
        $input = $request->all();   
        $joueur = new Joueur;
        $joueur->name = $input['name'];
        $joueur->equipe_id = $input['equipe'];
        $joueur->save();
        return redirect()->to("/equipe/".$input['equipe']);
    } 
}


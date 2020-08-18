<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function list(){
        return view('Equipe', ['equipes' => Equipe::all()]);
    }
    public function creer(){
        return view('creerEquipe');
    }    
    public function enregistrer(Request $request){
        $input = $request->all();
        print_r($input);
        $equipe = new Equipe;
        $equipe->name = $input['name'];
        $equipe->save();
        return view('welcome');  
    }   
}


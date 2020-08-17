<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Race;

class RaceController extends Controller
{
    public function list(){
        return view('race', ['races' => Race::all()]);
    }
}


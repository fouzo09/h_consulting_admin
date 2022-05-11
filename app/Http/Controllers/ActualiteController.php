<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;

class ActualiteController extends Controller
{

    public function getActualites(){

        $actualites = Actualite::all();
        return view("front.actualites.index")->withActualites($actualites);
    } 

    public function getActualite($id){

        $actualite = Actualite::find($id);        
        return view("front.actualites.details")->withActualite($actualite);
    }
}

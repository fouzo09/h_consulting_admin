<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
class FormationController extends Controller
{

    public function getFormations(){

        $formations = Formation::all();
        return view("front.formations.index")->withFormations($formations);
    } 

    public function getFormation($id){

        $formation = Formation::find($id);
        
        return view("front.formations.details")->withFormation($formation);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Emploi;
class OffreEmploiController extends Controller
{
    public function getListeOffreEmploi(){
        $offresEmplois = Emploi::orderBy('id', 'DESC')->get();
        
        return view("front.emploi.liste", compact('offresEmplois'));
    }
}

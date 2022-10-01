<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Emploi;
use App\Models\Type;
use App\Models\Ville;
use App\Models\Secteur;
use App\Models\Grade;
use App\Models\Formation;
use App\Models\Domaine;
class OffreEmploiController extends Controller
{
    public function getListeOffreEmploi(){
        $offresEmplois = Emploi::orderBy('id', 'DESC')->get();
        $types         = Type::orderBy('id', 'DESC')->get();
        $villes        = Ville::orderBy('id', 'DESC')->get();
        $secteurs      = Secteur::orderBy('id', 'DESC')->get();
        $grades        = Grade::orderBy('id', 'DESC')->get();
        $formations    = Formation::orderBy('id', 'DESC')->get();
        $domaines      = Domaine::orderBy('id', 'DESC')->get();
        return view("front.emploi.liste", compact('offresEmplois','types','villes','secteurs','grades','formations','domaines'));
    }
    public function getDetailsOffreEmploi(Emploi $emploi)
    {
        $relatedJobs = Emploi::where("secteur_id",$emploi->secteur_id)->get();
        return view("front.emploi.details",compact('emploi','relatedJobs'));
    }
}

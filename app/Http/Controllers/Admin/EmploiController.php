<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Emploi;
use App\Models\Domaine;
use App\Models\Type;
use App\Models\Ville;
use App\Models\Grade;
use App\Models\Secteur;
use App\Models\Entreprise;

class EmploiController extends Controller
{
    public function getIndex(){
        $emplois = Emploi::all();
        return view('emplois.list', compact('emplois'));
    }

    public function getAdd(){

        $secteurs    = Secteur::all();
        $domaines    = Domaine::all();
        $types       = Type::all();
        $villes      = Ville::all();
        $entreprises = Entreprise::all();
        $grades      = Grade::all();
        
        return view('emplois.add', compact('domaines', 'secteurs', 'types', 'entreprises', 'villes', 'grades'));
    }

    public function postAdd(){
        
        $rules = [
            'image'    => 'required',
            'titre'    => 'required',
            'contenu'  => 'required',
            'date_publication' => 'required',            
        ];
    
        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];
        
    
        $this->validate(request(), $rules, $customMessages);

        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/img/offres-emplois'), $filename);

        $emploi = new Emploi();

        $emploi->image    = $filename;
        $emploi->titre    = request()->titre;
        $emploi->grade_id = request()->grades;
        $emploi->experience    = request()->experience;
        $emploi->domaine_id    = json_encode(request()->domaines);
        $emploi->ville_id      = json_encode(request()->villes);
        $emploi->entreprise_id = request()->entreprises;
        $emploi->type_id       = request()->types;
        $emploi->secteurs      = json_encode(request()->secteurs);
        $emploi->contenu       = request()->contenu;
        $emploi->date_publication = request()->date_publication;
        $emploi->user_id  = 1;

        $emploi->save();

        return back();
    }
}

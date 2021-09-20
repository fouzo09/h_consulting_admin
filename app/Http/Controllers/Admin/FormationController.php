<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Formation;

class FormationController extends Controller
{
    

    public function getIndex(){
        $formations = Formation::all();
        return view('formations.list', compact('formations'));
    }

    public function getAdd(){
        return view('formations.add');
    }

    public function postAdd(){
        
        $rules = [
            'image'    => 'required',
            'titre'    => 'required',
            'contenu'  => 'required',
            'formateur' => 'required',            
        ];
    
        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];
    
        $this->validate(request(), $rules, $customMessages);

        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/img/actualite'), $filename);

        $formation = new Formation();

        $formation->image    = $filename;
        $formation->titre    = request()->titre;
        $formation->contenu  = request()->contenu;
        $formation->formateur = request()->formateur;
        

        $formation->save();

        return back();
    }
}

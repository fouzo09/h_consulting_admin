<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Emploi;

class EmploiController extends Controller
{
    public function getIndex(){
        $emplois = Emploi::all();
        return view('emplois.list', compact('emplois'));
    }

    public function getAdd(){
        return view('emplois.add');
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
        request()->image->move(public_path('assets/img/entreprise'), $filename);

        $emploi = new Emploi();

        $emploi->image    = $filename;
        $emploi->titre    = request()->titre;
        $emploi->contenu  = request()->contenu;
        $emploi->date_publication = request()->date_publication;
        $emploi->user_id  = 1;

        $emploi->save();

        return back();
    }
}

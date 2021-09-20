<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    

    public function getIndex(){
        $entreprises = Entreprise::all();
        return view('entreprises.list', compact('entreprises'));
    }

    public function getAdd(){
        return view('entreprises.add');
    }

    public function postAdd(){
        
        $rules = [
            'logo' => 'required',
            'raison_sociale' => 'required',
            'adresse'  => 'required'           
        ];
    
        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];
    
        $this->validate(request(), $rules, $customMessages);

        $filename = time().'.'.request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('assets/img/entreprise'), $filename);

        $entreprise = new Entreprise();

        $entreprise->logo    = $filename;
        $entreprise->raison_sociale    = request()->raison_sociale;
        $entreprise->adresse  = request()->adresse;
        

        $entreprise->save();

        return back();
    }
}

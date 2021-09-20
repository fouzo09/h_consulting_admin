<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Actualite;

class ActualiteController extends Controller
{
    

    public function getIndex(){
        $actualites = Actualite::all();
        return view('actualites.list', compact('actualites'));
    }

    public function getAdd(){
        return view('actualites.add');
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
        request()->image->move(public_path('assets/img/actualite'), $filename);

        $actualite = new Actualite();

        $actualite->image    = $filename;
        $actualite->titre    = request()->titre;
        $actualite->contenu  = request()->contenu;
        $actualite->date_publication = request()->date_publication;
        $actualite->user_id  = 1;
        

        $actualite->save();

        return back();
    }
}

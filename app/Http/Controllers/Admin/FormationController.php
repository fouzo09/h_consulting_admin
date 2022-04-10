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


       if($formation->save()){
             return redirect()->route('list.formations')->withSuccess('Ajout éffectué avec succes');
       }else{
         return back()->with('error','Erreur,lors de l\'ajout de la formation');
       }
    }

    public function EditFormationForm($formationID)
    {
        $formation=Formation::find($formationID);
        if(is_null($formation)){
            return back()->with('error','Aucune formation trouvé');
        }else{
            return view('formations.edit')->withFormation($formation);
        }
    }

    public function EditFormation(Request $request,$formationID)
    {
        $formation=Formation::find($formationID);
        if(is_null($formation)){
            return back()->with('error','Aucune formation trouvée');
        }else{
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

            $formation->image    = $filename;
            $formation->titre    = request()->titre;
            $formation->contenu  = request()->contenu;
            $formation->formateur = request()->formateur;
            if($formation->update()){
                return redirect()->route('list.formations')->withSuccess('Modification éffectué avec succes');
            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');

            }
        }
    }

    public function DeleteFormation($formationID)
    {
        $formation=Formation::find($formationID);
        if(is_null($formation)){
            return back()->with('error','Aucune formation trouvée');
        }else{
            if($formation->delete()){
                return redirect()->route('list.formations')->withSuccess('Supression éffectué avec succes');

            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');
            }
        }
    }
}

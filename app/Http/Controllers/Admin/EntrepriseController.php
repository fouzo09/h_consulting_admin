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

    public function postAdd(Request $request){
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

        if($entreprise->save()){
                return redirect()->route('list.entreprises')->withSuccess('Ajout éffectué avec succes');
        }else{
            return back()->with('error','Erreur,lors de l\'ajout de l\'entreprise');
        }

    }


    public function EditEntrepriseForm($entrepriseID)
    {
        $entreprise=Entreprise::find($entrepriseID);
        if(is_null($entreprise)){
            return back()->with('error','Aucune entreprise trouvée');
        }else{
            return view('entreprises.edit')->withEntreprise($entreprise);
        }
    }

    public function EditEntreprise(Request $request,$entrepriseID)
    {
        $entreprise=Entreprise::find($entrepriseID);
        if(is_null($entreprise)){
            return back()->with('error','Aucune entreprise trouvée');
        }else{
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

            $entreprise->logo    = $filename;
            $entreprise->raison_sociale    = request()->raison_sociale;
            $entreprise->adresse  = request()->adresse;

            if($entreprise->update()){
                return redirect()->route('list.entreprises')->withSuccess('Modification éffectué avec succes');
            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');

            }
        }
    }

    public function DeleteEntreprise($entrepriseID)
    {
        $entreprise=Entreprise::find($entrepriseID);
        if(is_null($entreprise)){
            return back()->with('error','Aucune entreprise trouvée');
        }else{
            if($entreprise->delete()){
                return redirect()->route('list.entreprises')->withSuccess('Supression éffectué avec succes');

            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');
            }
        }
    }
}

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

        if($actualite->save()){
            return redirect()->route('list.actualites')->withSuccess('Ajout éffectué avec succes');
        }else{
            return back()->with('error','Erreur,lors de l\'ajout de l\'offre');
        }

    }

    public function RetrieveActualite($actualiteID)
    {
        $actualite = Actualite::find($actualiteID);
        if(is_null($actualite)){
            return back()->with('error','Aucun actualite trouvée');
        }else{
            return view('actualites.single')->withActualite($actualite);
        }
    }

    public function EditActualiteForm($actualiteID)
    {
        $actualite = Actualite::find($actualiteID);
        if(is_null($actualite)){
            return back()->with('error','Aucun actualite trouvée');
        }else{
            return view('actualites.edit')->withActualite($actualite);
        }
    }

    public function EditActualite(Request $request,$actualiteID)
    {
        $actualite = Actualite::find($actualiteID);
        if(is_null($actualite)){
            return back()->with('error','Aucune actualite trouvée');
        }else{
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

            $actualite->image    = $filename;
            $actualite->titre    = request()->titre;
            $actualite->contenu  = request()->contenu;
            $actualite->date_publication = request()->date_publication;
            $actualite->user_id  = 1;
            if($actualite->update()){
                return redirect()->route('list.actualites')->withSuccess('Modification éffectué avec succes');
            }else{
                return back()->with('error','La madification n\'a pas été éffectué');

            }
        }
    }

    public function DeleteActualite($actualiteID)
    {
        $actualite=Actualite::find($actualiteID);
        if(is_null($actualite)){
            return back()->with('error','Aucune actualite trouvée');
        }else{
            if($actualite->delete()){
                return redirect()->route('list.actualites')->withSuccess('Supression éffectué avec succes');

            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');
            }
        }
    }
}

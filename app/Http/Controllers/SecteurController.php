<?php

namespace App\Http\Controllers;

use App\Models\Secteur;
use Illuminate\Http\Request;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteurs = Secteur::all()->sortByDesc('created_at');
         return view('secteurs.listeSecteur',compact('secteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secteurs.createSecteur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verification de la validation
        $request->validate([
            'nom'=> 'required'
        ]);
        // fin de la verification

        // enregistrement du secteur
        Secteur::create([
            'nom'=>$request->nom
        ]);
        //fin de l'enregistrement

        // la redirection sur la liste
        return redirect()->route('listeSecteur')
                         ->with('success','Ajout effectué avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $secteur = Secteur::find($id);
        return view('secteurs.editSecteur',compact('secteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //verification de la validation
        $request->validate([
            'nom'=>'required'
        ]);
        //fin de la verification

        //enregistrement de la validation
        $secteur = Secteur::find($id);
        $secteur->update([
            'nom'=>$request->nom
        ]);
        //fin de l'enregistrement

        //la redirection
        return redirect()->route('listeSecteur')
                         ->with('success', "Modification effectuée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //suppression d'un enregistrement
        $secteur = Secteur::find($id);
        $secteur ->delete();
        //fin de la suppression.

        //la redirection sur la liste
        return redirect()->route('listeSecteur')
                         ->with('Success','Suppression effectuée avec succès');

    }
}

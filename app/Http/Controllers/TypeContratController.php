<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeContratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeContrats = Type::all()->sortByDesc('created_at');
        return view('typeContrat.listeTypeContrat',compact('typeContrats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeContrat.createTypeContrat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   // verification des données à valider
        $request->validate([
            'nom'=>'required'
        ]);
        //fin de la verification.

        // enregistrement de l'information dans la base de données
        Type::create([
            'nom'=> $request->nom
        ]);
        //fin de l'enregistrement.

        //la redirection vers la liste.
        return redirect()->route('listeTypeContrat')
                         ->with('success','Ajout effectué avec succès');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeContrat = Type::find($id);
        return view('typeContrat.editTypeContrat',compact('typeContrat'));
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
        // verification des données à valider
        $request->validate([
            'nom'=>'required'
        ]);
        //fin de la verification.

        // enregistrement de l'information dans la base de données
        $typeContrat = Type::find($id);
        $typeContrat->update([
            'nom'=> $request->nom
        ]);
        //fin de l'enregistrement.

        //la redirection sur la liste
        return redirect()->route('listeTypeContrat')
                         ->with('success','Modification effectuée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //la suppression du type de Contrat.
        $typeContrat = Type::find($id);
        $typeContrat->delete();
        //fin de la suppression

        //la redirection sur la liste
        return redirect()->route('listeTypeContrat')
                         ->with('success','Suppression effectuée avec succès');
    }
}

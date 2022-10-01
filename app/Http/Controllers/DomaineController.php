<?php

namespace App\Http\Controllers;

use App\Models\Domaine;
use Illuminate\Http\Request;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domaines = Domaine::all()->sortByDesc('created_at');
        return view('domaines.listeDomaine',compact('domaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('domaines.createDomaine');
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
            "nom"=>'required'
        ]);
        //fin de la verification

        //enregistrement du domaine
        Domaine::create([
            'nom'=>$request->nom
        ]);
        //fin de l'enregistrement du domaine

        //la redirection sur la liste
        return redirect()->route('listeDomaine')->with('success','Ajout effectué avec succès');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domaine = Domaine::find($id);
       return view('domaines.editDomaine',compact('domaine'));
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
        //fin de la verification de la validation

        //Modification d'un enregistrement
        $domaine = Domaine::find($id);
        $domaine->update([
            'nom'=>$request->nom
        ]);
        // fin de la modification

        //la redirection sur la liste
        return redirect()->route('listeDomaine')
                         ->with('success',"Modification effectuée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //suppression de l'enregistrement
        $domaine = Domaine::find($id);
        $domaine->delete();
        //fin de la redirection

        return redirect()->route('listeDomaine')
                         ->with('success','Suppression effectuée avec succès');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\EmploiUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnvoisCVPostulantController extends Controller
{
    public function EnvoisCV(Request $request, $emploi_Id)
    {

        // verification de la validation du CV
            $validate =  $request->validate(['cv' => 'required | mimes:pdf']);
        // fin de la verification.

        //Renommage du fichier importer en un autre nom.
        $filename = time().'.CV.'.Auth::User()->firstName.'.'.$request->cv->extension();

        // stockage du fichier dans le dossier storrage
            $path = $request->cv->storeAs(
            'cv',
            $filename,
            'public');
        //fin du stockage

        // L'enregistrement faites dans la base de données
       $user = EmploiUser::create([
           'Emploi_id'=>$emploi_Id,
           'User_id'=>Auth::User()->id,
           'CV'=>$path,
           'date_de_la_postulation'=>Carbon::now()
        ]);
        // fin de l'enregistrement

        // la redirection de l'utilisateur sur la page initiale.
        return redirect()->route('details-offres-emplois',['emploi'=>$emploi_Id])
                         ->with('success',"CV envoié avec succès");

    }
}

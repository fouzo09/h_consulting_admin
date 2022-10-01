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
            $validate =  $request->validate([
                'cv' => 'required | mimes:pdf',
                'lettre_moti' => 'required | mimes:pdf'
            ]);
        // fin de la verification.

        //Renommage du fichier CV importer en un autre nom.
        $filename = time().'.CV.'.Auth::User()->firstName.'.'.$request->cv->extension();

        //Renommage du fichier lettre de motivation importer en un autre nom.
        $fileNameLettre = time().'.lettre_moti.'.Auth::User()->firstName.'.'.$request->lettre_moti->extension();


        //stockage du fichier CV dans le dossier storrage
            $path = $request->cv->storeAs(
            'cv',
            $filename,
            'public');
        //fin du stockage

         //stockage du fichier lettre motivation dans le dossier storrage
         $pathLettre = $request->lettre_moti->storeAs(
            'lettre_motivations',
            $fileNameLettre,
            'public');
        //fin du stockage

        // L'enregistrement faites dans la base de données
       $user = EmploiUser::create([
           'Emploi_id'=>$emploi_Id,
           'User_id'=>Auth::User()->id,
           'CV'=>$path,
           'lettre_moti'=>$pathLettre,
           'date_de_la_postulation'=>Carbon::now()
        ]);
        // fin de l'enregistrement

        // la redirection de l'utilisateur sur la page initiale.
        return redirect()->route('details-offres-emplois',['emploi'=>$emploi_Id])
                         ->with('success',"Vos dossiers sont envoyés avec succès");

    }
}

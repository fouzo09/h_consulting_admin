<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Type;
use App\Models\Config;
use App\Models\Emploi;
use App\Models\Domaine;
use App\Models\Secteur;
use App\Models\Service;
use App\Models\Actualite;
use App\Models\Formation;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //affichage des nombres totaux.
        $actualites = Actualite::count();
        $domaines = Domaine::count();
        $secteurs = Secteur::count();
        $types = Type::count();
        $emplois = Emploi::count();
        $services = Service::count();
        $formations = Formation::count();
        $entreprises = Entreprise::count();
        $configs = Config::count();
        $users = User::count();

        // affichage de la liste des candidats pour les offres d'emploi.
        $candidats = Emploi::join('emploi_users', 'emploi_users.Emploi_id', '=', 'emplois.id')
                            ->select('emploi_users.*','emplois.titre','emplois.contenu')
                            ->get();
        return view('dashboard',compact('actualites','domaines','secteurs','types','emplois','services','formations','entreprises','configs','users','candidats'));
    }

    public function get_list_candidat_from_dashboard(){

    }
}

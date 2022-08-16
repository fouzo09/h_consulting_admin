<?php

namespace App\Models;

use App\User;
use DateTime;
use App\Models\Type;
use App\Models\Ville;
use App\Models\Domaine;
use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Model;


class Emploi extends Model
{
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function getVilles($offreID){
        $offre = self::find($offreID);
        $villeNames = null;

        if($offre){
            $villeIds = json_decode($offre->ville_id);

            if($villeIds){

                foreach($villeIds as $villeId){
                    $ville = Ville::find($villeId);
                    if($ville){
                        $villeNames = (is_null($villeNames)) ? $ville->nom : $villeNames.' - '.$ville->nom;
                    }
                }
            }
            return $villeNames;
        }
        return $villeNames;

    }

    public static function getDomaines($offreID){

        $offre = self::find($offreID);
        $domaines = [];

        if($offre){
            $domaineIds = json_decode($offre->domaine_id);

            if($domaineIds){

                foreach($domaineIds as $domaineId){
                    $domaine = Domaine::find($domaineId);
                    if($domaine){
                        $domaines[] = $domaine;
                    }
                }
            }
            return $domaines;
        }
        return $domaines;
    }

    public static function nombreDejourDuPoste($datePosts){
        $datePosts = new DateTime($datePosts);
        $now       = new DateTime(date('Y-m-d'));

        $interval  = $datePosts->diff($now);

        if($interval->m <= 0){
            return $interval->d.' jours';
        }

        if($interval->y  <= 0){
            if($interval->d > 0){

                return $interval->m.' mois '.$interval->d.' jours';
            }
            return $interval->m.' mois';
        }

        if($interval->y >= 1){

            if( $interval->y > 1){
                return $interval->y.' années';
            }

            return $interval->y.' année';
        }
    }
}

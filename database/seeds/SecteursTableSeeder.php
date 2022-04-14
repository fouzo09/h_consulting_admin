<?php

use Illuminate\Database\Seeder;
use App\Models\Secteur;

class SecteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $secteurs = [
            "Telecom",
            "Import/Export",
            "BTP"
        ];

        foreach($secteurs as $secteur){
            Secteur::create([
                "nom"=> $secteur
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Domaine; 

class DomainesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaines = [
            "BTS",
            "DUT",
            "Licence",
            "Master",
            "Doctorat"
        ];

        foreach($domaines as $domaine){
            Domaine::create([
                "nom"=> $domaine
            ]);
        }
    }
}

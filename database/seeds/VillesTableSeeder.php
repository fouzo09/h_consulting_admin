<?php

use Illuminate\Database\Seeder;
use App\Models\Ville;
class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = [
            "Conakry",
            "Nzérékoré",
            "Kankan",
            "Labé",
            "Kindia",
            "Boké",
            "Faranah"
        ];

        foreach($villes as $ville){
            Ville::create([
                'nom'=> $ville
            ]);
        }

    }
}

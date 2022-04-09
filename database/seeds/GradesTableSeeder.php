<?php

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            "BTS",
            "DUT",
            "Licence",
            "Master",
            "Doctorat"
        ];

        foreach($grades as $grade){
            Grade::create([
                "nom"=> $grade
            ]);
        }
    }
}

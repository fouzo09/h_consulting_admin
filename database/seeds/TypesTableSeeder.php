<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            "CDI",
            "CDD"
        ];

        foreach($types as $type){
            Type::create([
                "nom"=> $type
            ]);
        }
    }
}

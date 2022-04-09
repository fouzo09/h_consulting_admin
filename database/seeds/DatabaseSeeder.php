<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);

        $this->call(DomainesTableSeeder::class);
        $this->call(GradesTableSeeder::class);
        $this->call(SecteursTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(VillesTableSeeder::class);
    }
}

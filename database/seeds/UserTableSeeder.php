<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'firstName' => 'Bah',
            'lastName' => 'Mamadou',
            'email' => 'bah@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => 1,
             'phone' => '627242636',
             'status' => true
        ]);
    }
}

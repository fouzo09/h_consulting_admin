<?php

use Illuminate\Database\Seeder;
use App\Permission;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->delete();

         $roles = ['Admin','User'];

         for($i = 0; $i < count($roles); $i++)
         {
             DB::table('roles')->insert([
                 'nom' => $roles[$i]
             ]);
         }

         $permissions = Permission::count();
         for ($i=1; $i <= $permissions; $i++) { 
            
            DB::table('permission_role')->insert([
                'permission_id' => $i,
                'role_id' => 1
            ]);
         }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'created_at' => '2021-06-03 12:23:01',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'admin',
                'status' => 1,
                'updated_at' => '2021-06-03 12:23:03',
            ),
            1 => 
            array (
                'created_at' => '2021-06-03 12:23:16',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'demo_admin',
                'status' => 1,
                'updated_at' => '2021-06-04 10:24:13',
            ),
            2 => 
            array (
                'created_at' => '2021-06-04 10:31:46',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'user',
                'status' => 1,
                'updated_at' => '2021-06-04 10:31:46',
            ),
        ));
        
        
    }
}
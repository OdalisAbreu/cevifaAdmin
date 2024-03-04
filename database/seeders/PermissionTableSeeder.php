<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'role',
                'guard_name' => 'web',
                'parent_id' => NULL,
                'created_at' => '2021-06-04 11:36:03',
                'updated_at' => '2021-06-04 11:36:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'role add',
                'guard_name' => 'web',
                'parent_id' => 1,
                'created_at' => '2021-06-04 12:28:07',
                'updated_at' => '2021-06-04 12:28:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'role list',
                'guard_name' => 'web',
                'parent_id' => 1,
                'created_at' => '2021-06-04 12:28:22',
                'updated_at' => '2021-06-04 12:28:22',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'permission',
                'guard_name' => 'web',
                'parent_id' => NULL,
                'created_at' => '2021-06-04 12:28:47',
                'updated_at' => '2021-06-04 12:28:47',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'permission add',
                'guard_name' => 'web',
                'parent_id' => 4,
                'created_at' => '2021-06-04 12:28:59',
                'updated_at' => '2021-06-04 12:28:59',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'permission list',
                'guard_name' => 'web',
                'parent_id' => 4,
                'created_at' => '2021-06-04 12:29:54',
                'updated_at' => '2021-06-04 12:29:54',
            ),
        ));
        
        
    }
}
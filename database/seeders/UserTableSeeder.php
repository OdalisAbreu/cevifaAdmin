<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345678'),
                'phone_number' => NULL,
                'user_type' => 'admin',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-03 06:52:05',
                'updated_at' => '2021-06-03 06:52:05',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Demo',
                'last_name' => 'Admin',
                'username' => 'demo_admin',
                'email' => 'demo@admin.com',
                'password' => bcrypt('12345678'),
                'phone_number' => NULL,
                'user_type' => 'demo_admin',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-03 06:55:14',
                'updated_at' => '2021-06-03 06:55:14',
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'John',
                'last_name' => 'User',
                'username' => 'user',
                'email' => 'user@example.com',
                'password' => bcrypt('12345678'),
                'phone_number' => NULL,
                'user_type' => 'user',
                'email_verified_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-07 08:42:16',
                'updated_at' => '2021-06-07 08:42:16',
            ),
        ));
        
        
    }
}
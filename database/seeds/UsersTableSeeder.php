<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ibraim',
            'email' => 'ibraim@gmail.com',
        	'password' => bcrypt('secret'),
        	'is_admin' => true,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);


        DB::table('users')->insert([
            'name' => 'Test',
            'email' => 'test@apinar.com',
            'password' => bcrypt('secret'),
            'is_admin' => false,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);



    }
}

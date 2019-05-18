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
        App\User::Create([
        	'name' => 'admin',
        	'email' => 'admin@blog.com',
        	'password' => bcrypt('password')
        ]);
    }
}

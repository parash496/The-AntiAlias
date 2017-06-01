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
        $user = [
        	'id' => 2,
        	'name' => 'John',
        	'email' => 'johndoe@gmail.com',
        	'password' => bcrypt('doe')
        ];

        DB::table('users')->insert($user);
    }
}

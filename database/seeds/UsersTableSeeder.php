<?php

use Illuminate\Support\Facades\Hash;
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
			'name'		=>	'superadmin',
			'email'		=>	'provincial@gmail.com',
			'password'	=>	Hash::make('superadmin123')
		]);
    }
}

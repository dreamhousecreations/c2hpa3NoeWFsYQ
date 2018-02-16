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
        App\User::create([
        	'name' => 'Shekhar Khatri',
        	'email' => 'shekharkhatri016@gmail.com',
        	'username' => 'shekharkhatri',
        	'password' => Illuminate\Support\Facades\Hash::make('admin123'),
        	'active' => 1
        ]);
    }
}

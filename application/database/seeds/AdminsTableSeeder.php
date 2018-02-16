<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Admin::create([
        	'name' => 'Shekhar Khatri',
        	'email' => 'shekharkhatri016@gmail.com',
        	'username' => 'shekharkhatri',
        	'password' => Illuminate\Support\Facades\Hash::make('admin123'),
        	'active' => 1
        ]);
    }
}

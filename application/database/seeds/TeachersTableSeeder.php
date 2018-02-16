<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Teacher::create([
        	'username' => 'yunishshrestha',
        	'name' => 'Yunish Shrestha',
        	'email' => 'shekharkhatri016@gmail.com',
        	'password' => Illuminate\Support\Facades\Hash::make('admin123'),
            'active' => 1
        ]);

        App\Models\Teacher::create([
            'username' => 'shekharkhatri',
            'name' => 'Shekhar Khatri',
            'email' => 'shekharkhatri016@gmail.com',
            'password' => Illuminate\Support\Facades\Hash::make('admin123'),
            
        ]);
    }
}

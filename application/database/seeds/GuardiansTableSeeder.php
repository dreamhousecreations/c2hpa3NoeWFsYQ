<?php

use Illuminate\Database\Seeder;

class GuardiansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Guardian::create([
        	'username' => 'ashokshrestha',
        	'name' => 'Ashok Shrestha',
        	'email' => 'shekharkhatri016@gmail.com',
        	'password' => Illuminate\Support\Facades\Hash::make('admin123'),
            'active' => 1
        ]);
    }
}

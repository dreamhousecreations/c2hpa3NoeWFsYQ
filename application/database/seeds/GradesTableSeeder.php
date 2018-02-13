<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Grade::create([
           'name' => 'ten',
           'description' => 'A grade of school',
        ]);
        \App\Grade::create([
            'name' => 'eleven',
            'description' => 'A grade of school',
        ]);
        \App\Grade::create([
            'name' => 'twelve',
            'description' => 'A grade of school',
        ]);
    }
}

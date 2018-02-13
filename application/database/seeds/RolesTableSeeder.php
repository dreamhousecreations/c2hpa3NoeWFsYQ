<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'admin',
            'description' => 'Adminstrator of website',
        ]);
        App\Role::create([
            'name' => 'teacher',
            'description' => 'Prepares for lecture',
        ]);
        App\Role::create([
            'name' => 'student',
            'description' => 'Studies the lecture',
        ]);
    }
}

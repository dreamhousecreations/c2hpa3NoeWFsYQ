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
        for ($x = 5; $x <= 10; $x++) {
            $grade = App\Models\Grade::create([
                'name' => $x,
                'description' => 'Grade ' . $x,
            ]);
            $grade->classrooms()->create([
                'name' => 'English',
                'slug' => 'english'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject English',
            ]);
            $grade->classrooms()->create([
                'name' => 'Nepali',
                'slug' => 'nepali'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject Nepali',
            ]);
            $grade->classrooms()->create([
                'name' => 'Mathematics',
                'slug' => 'mathematics'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject Mathematics',
            ]);
        }
    }
}

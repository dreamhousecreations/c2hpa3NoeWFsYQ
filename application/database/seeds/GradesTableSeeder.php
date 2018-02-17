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
            $classroom = $grade->classrooms()->create([
                'name' => 'English',
                'slug' => 'english'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject English',
            ]);
            factory(App\Models\Topic::class, 10)
            ->create([
                'classroom_id' => $classroom->id,
            ]);
            $classroom = $grade->classrooms()->create([
                'name' => 'Nepali',
                'slug' => 'nepali'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject Nepali',
            ]);
            factory(App\Models\Topic::class, 10)
            ->create([
                'classroom_id' => $classroom->id,
            ]);
            $classroom = $grade->classrooms()->create([
                'name' => 'Mathematics',
                'slug' => 'mathematics'. $grade->name,
                'description' => 'Grade '. $grade->name .' Subject Mathematics',
            ]);
            factory(App\Models\Topic::class, 10)
            ->create([
                'classroom_id' => $classroom->id,
            ]);
        }
    }
}

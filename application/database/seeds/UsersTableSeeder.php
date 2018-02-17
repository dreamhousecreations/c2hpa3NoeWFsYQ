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
        	'active' => 1,
            'grade_id' => 1,
        ]);

        factory(App\User::class, 10)->create([
            'grade_id' => 1,
        ]);
        factory(App\User::class, 10)->create([
            'grade_id' => 2,
        ]);
        factory(App\User::class, 10)->create([
            'grade_id' => 3,
        ]);
        factory(App\User::class, 10)->create([
            'grade_id' => 4,
        ]);
        factory(App\User::class, 10)->create([
            'grade_id' => 5,
        ]);
        factory(App\User::class, 10)->create([
            'grade_id' => 6,
        ]);
    }
}

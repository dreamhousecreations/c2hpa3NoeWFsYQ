<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GradesTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(GuardiansTableSeeder::class);
        // $this->call(ClassroomsTableSeeder::class);

    }
}

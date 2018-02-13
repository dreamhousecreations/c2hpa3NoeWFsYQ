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
        $user = \App\User::create([
            'name' => 'Shekhar Khatri',
            'email' => 'shekharkhatri016@gmail.com',
            'username' => 'shekharkhatri',
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
        ]);
        $user->roles()->attach(1);
        $user->detail()->create([
           'birthday' => '2056-11-02',
           'gender' => 'M',
        ]);
        $user->address()->create([
           'country' => 'NP',
            'state' => 'State 3',
            'city' => 'Kathmandu',
            'address1' => 'Nagarjun-10',
            'address2' => 'Syuchatar',
            'current' => 1
        ]);
    }
}

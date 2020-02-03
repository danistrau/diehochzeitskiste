<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Daniela Strauss',
                'email' => 'dani_strau@yahoo.de',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ],

            [
                'name'=> 'Test',
                'email' => 'test@test.at',
                'password' => Hash::make('password'),
            ],

            [
                'name'=> 'Alexander Ghirardini',
                'email' => 'a.ghirardini@gmx.at',
                'password' => Hash::make('password'),
            ]
        ];

        foreach( $users as $user){
            (new User())->create($user);
        };
    }
}

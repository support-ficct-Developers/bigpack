<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
  
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name'=> 'Darwin Mamani',
            'email'=> 'darwin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');
        $user1->idRol = 1 ; 
        $user1->save();

        $user2 = User::create([
            'name'=> 'Daniel Soliz',
            'email'=> 'daniel@gmail.com',
            'password' => bcrypt('11111111'),
        ])->assignRole('Admin');
        $user2->idRol = 1 ;
        $user2->save();

        $user3 = User::create([
            'name'=> 'Harold Romero',
            'email'=> 'harold99@gmail.com',
            'password' => bcrypt('brrrrrrrr'),
        ])->assignRole('Admin');
        $user3->idRol = 1 ;
        $user3->save();

        $user4 = User::create([
            'name'=> 'Harold Apaza ',
            'email'=> 'harold@gmail.com',
            'password' => bcrypt('12123434'),
        ])->assignRole('editor');
        $user4->idRol = 2 ;
        $user4->save();
    }
}

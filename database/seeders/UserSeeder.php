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
        User::create([
            'name'=> 'Darwin Mamani',
            'email'=> 'darwin@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::create([
            'name'=> 'Daniel Soliz',
            'email'=> 'daniel@gmail.com',
            'password' => bcrypt('11111111'),
        ])->assignRole('Admin');

        User::create([
            'name'=> 'Harold Romero',
            'email'=> 'harold99@gmail.com',
            'password' => bcrypt('brrrrrrrr'),
        ])->assignRole('Admin');

        User::create([
            'name'=> 'Harold Apaza ',
            'email'=> 'harold@gmail.com',
            'password' => bcrypt('12123434')
        ])->assignRole('editor');
    }
}

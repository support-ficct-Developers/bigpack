<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semestre;
use App\Models\Materia;
use App\Models\Pack;
use App\Models\Docente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(SemestreSeeder::class);
        
        // \App\Models\User::factory(10)->create();

        $this->call(MateriaSeeder::class);

        $this->call(DocenteSeeder::class);

        $this->call(PackSeeder::class);
        

        
    }
}

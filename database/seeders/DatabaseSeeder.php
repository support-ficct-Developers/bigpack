<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Semestre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Semestre::create([
            'nombre'=> '1er Semestre',
        ]);
        Semestre::create([
            'nombre'=> '2do Semestre',
        ]);
        Semestre::create([
            'nombre'=> '3er Semestre',
        ]);
        Semestre::create([
            'nombre'=> '4to Semestre',
        ]);
        Semestre::create([
            'nombre'=> '5to Semestre',
        ]);
        Semestre::create([
            'nombre'=> '6to Semestre',
        ]);
        Semestre::create([
            'nombre'=> '7mo Semestre',
        ]);
        Semestre::create([
            'nombre'=> '8vo Semestre',
        ]);
        Semestre::create([
            'nombre'=> '9no Semestre',
        ]);
        Semestre::create([
            'nombre'=> '10mo Semestre',
        ]);
        Semestre::create([
            'nombre'=> 'Electivas',
        ]);
    }
}

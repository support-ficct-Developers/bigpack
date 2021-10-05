<?php

namespace Database\Seeders;

use App\Models\Docente;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Docente::create([
            'nombre'=>'Mario Lopez Winnipeg',
        ]);
        Docente::create([
            'nombre'=>'Ketime Gutierrez',
        ]);
        Docente::create([
            'nombre'=>'Sanchez Herbas',
        ]);
        Docente::create([
            'nombre'=>'Oropeza',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'id_semestre'=> '1',
            'nombre'=>'Introduccion a la informatica',
            'sigla'=> 'INF110'
        ]);
        Materia::create([
            'id_semestre'=> '1',
            'nombre'=>'Estructuras Discretas',
            'sigla'=> 'INF119'
        ]);
        Materia::create([
            'id_semestre'=> '1',
            'nombre'=>'Fisica 1',
            'sigla'=> 'FIS100'
        ]);
        Materia::create([
            'id_semestre'=> '1',
            'nombre'=>'Ingles 1',
            'sigla'=> 'LIN100'
        ]);

        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'Fisica 2',
            'sigla'=> 'FIS101'
        ]);
    }
}

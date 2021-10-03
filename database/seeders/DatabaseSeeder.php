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

        Pack::create([
            'id_materia'=> '1',
            'id_docente'=>'1',
            'link'=> 'https://www.google.com/?hl=es&gws_rd=ssl'
        ]);
        Pack::create([
            'id_materia'=> '2',
            'id_docente'=>'2',
            'link'=> 'https://www.google.com/?hl=es&gws_rd=ssl'
        ]);
        Pack::create([
            'id_materia'=> '3',
            'id_docente'=>'3',
            'link'=> 'https://www.google.com/?hl=es&gws_rd=ssl'
        ]);
        Pack::create([
            'id_materia'=> '4',
            'id_docente'=>'4',
            'link'=> 'https://www.google.com/?hl=es&gws_rd=ssl'
        ]);

        Pack::create([
            'id_materia'=> '4',
            'id_docente'=>'4',
            'link'=> 'https://herllo'
        ]);

        Pack::create([
            'id_materia'=> '1',
            'id_docente'=>'1',
            'link'=> 'https://drive.google.com/drive/folders/1tNjedTxh9N0B0L3uXbjjGhuOZ6Yjksx5?usp=sharing'
        ]);
    }
}

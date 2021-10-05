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
         //semestre 4-----------------------------------------------------------
         Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'CONTABILIDAD',
            'sigla'=> 'ADM200'
        ]);

        Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'ESTRUCTURA DE DATOS I',
            'sigla'=> 'INF220'
        ]);

        Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'PROGRAMACION ENSAMBLADOR',
            'sigla'=> 'INF221'
        ]);

        Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'PROBABILIDADES Y ESTADIST.I',
            'sigla'=> 'MAT202'
        ]);

        Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'METODOS NUMERICOS',
            'sigla'=> 'MAT205'
        ]);

        Materia::create([
            'id_semestre'=> '4',
            'nombre'=>'ANALISIS DE CIRCUITOS ELECTRON.',
            'sigla'=> 'RDS220'
        ]);

        
        //semestre 5-----------------------------------------------------------

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'ORGANIZACION Y METODOS',
            'sigla'=> 'ADM330'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'ECONOMIA PARA LA GESTION',
            'sigla'=> 'ECO300'
        ]);


        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'ESTRUCTURAS DE DATOS II',
            'sigla'=> 'INF310'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'BASE DE DATOS I',
            'sigla'=> 'INF312'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'PROGRAMAC.LOGICA Y FUNCIONAL',
            'sigla'=> 'INF318'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'LENGUAJES FORMALES',
            'sigla'=> 'INF319'
        ]);


        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'PROBABILIDADES Y ESTADISTICAS II',
            'sigla'=> 'MAT302'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'ELECTRONICA APLICADA A REDES',
            'sigla'=> 'RDS310'
        ]);

         //semestre 6-----------------------------------------------------------
         Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'FINANZAS PARA LA EMPRESA',
            'sigla'=> 'ADM320'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'BASES DE DATOS II',
            'sigla'=> 'INF322'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'SISTEMAS OPERATIVOS I',
            'sigla'=> 'INF323'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'COMPILADORES',
            'sigla'=> 'INF329'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'SISTEMAS DE INFORMACION I',
            'sigla'=> 'INF342'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'INVESTIG. OPERATIVA I',
            'sigla'=> 'MAT329'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'INTERPRETRACION DE SISTEMAS Y SENAL',
            'sigla'=> 'RDS320'
        ]);

        //Electivas---------------------------------------------------------------
        
        //5to semestre
        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'COSTOS Y PRESUPUESTOS',
            'sigla'=> 'ELC002'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'PROGRAMACION GRAFICA',
            'sigla'=> 'ELC102'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'DISENO DE CIRCUITOS INTEGRADOS',
            'sigla'=> 'ELC201'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'SISTEMAS LOGICOS Y DIGITALES I',
            'sigla'=> 'ELT352'
        ]);

        Materia::create([
            'id_semestre'=> '5',
            'nombre'=>'SENALES Y SISTEMAS',
            'sigla'=> 'ELT354'
        ]);

        //6tosemestre
        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'PRODUCCION Y MARKETING',
            'sigla'=> 'ELC003'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'TOPIC.AVANZ.DE PROGRAMAC.',
            'sigla'=> 'ELC103'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'TELEVISION DIGITAL',
            'sigla'=> 'ELC204'
        ]);

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'SISTEMAS LOGICOS Y DIGITALES II',
            'sigla'=> 'ELT362'
        ]);




    }
}

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
        //semestre 1    -----------------------------------------------------------
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
            'id_semestre'=> '1',
            'nombre'=>'CALCULO I',
            'sigla'=> 'MAT101'
        ]);

        //semestre 2-----------------------------------------------------------
        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'FISICA II',
            'sigla'=> 'FIS101'
        ]);


        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'PROGRAMACION I',
            'sigla'=> 'INF120'
        ]);

        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'INGLES TECNICO II',
            'sigla'=> 'LIN101'
        ]);

        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'CALCULO II',
            'sigla'=> 'MAT102'
        ]);

        Materia::create([
            'id_semestre'=> '2',
            'nombre'=>'ALGEBRA LINEAL',
            'sigla'=> 'MAT103'
        ]);
        //semestre 3-----------------------------------------------------------
        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'ADMINISTRACION',
            'sigla'=> 'ADM100'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'TEORIA DE CAMPOS',
            'sigla'=> 'ELT241'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'FISICA III',
            'sigla'=> 'FIS200'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'PROGRAMACION II',
            'sigla'=> 'INF210'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'ARQUITECTURA DE COMPUTADORAS',
            'sigla'=> 'INF211'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'ECUACIONES DIFERENCIALES',
            'sigla'=> 'MAT207'
        ]);

        Materia::create([
            'id_semestre'=> '3',
            'nombre'=>'ANALISIS DE CIRCUITOS',
            'sigla'=> 'RDS210'
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

        Materia::create([
            'id_semestre'=> '6',
            'nombre'=>'SISTEMAS LOGICOS Y DIGITALES II',
            'sigla'=> 'ELT362'
        ]);
        //semestre 7-----------------------------------------------------------
            

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'SISTEMAS DE INFORMACION II',
                'sigla'=> 'INF412'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'SISTEMAS OPERATIVOS II',
                'sigla'=> 'INF413'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'INTELIGENCIA ARTIFICIAL',
                'sigla'=> 'INF418'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'SISTEMAS PARA EL SOPORTE A LA TOMA',
                'sigla'=> 'INF432'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'REDES I',
                'sigla'=> 'INF433'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'INVESTIGAC.OPERATIVA II',
                'sigla'=> 'MAT419'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'APLICACIONES CON MICROPROCESAD.',
                'sigla'=> 'RDS410'
            ]);

            Materia::create([
                'id_semestre'=> '7',
                'nombre'=>'SISTEMAS DE COMUNICACION I',
                'sigla'=> 'ELT374'
            ]);
        //semestre 8-----------------------------------------------------------
            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'PREPARAC.Y EVALUAC.DE PROYECTOS',
                'sigla'=> 'ECO449'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'SISTEMAS DE COMUNICACION II',
                'sigla'=> 'ELT384'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'INGENIERIA DE SOFTWARE I',
                'sigla'=> 'INF422'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'REDES II',
                'sigla'=> 'INF423'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'SISTEMAS EXPERTOS',
                'sigla'=> 'INF428'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'SISTEMAS DE INFORM.GEOGRAFICA',
                'sigla'=> 'INF442'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'AUDITORIA INFORMATICA',
                'sigla'=> 'INF462'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'TALLER DE ANALISIS Y DISENO DE REDE',
                'sigla'=> 'RDS421'
            ]);

            Materia::create([
                'id_semestre'=> '8',
                'nombre'=>'LEGISLAC.EN REDES Y COMUNICACIONES',
                'sigla'=> 'RDS429'
            ]);

        //semestre 9-----------------------------------------------------------
        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'TALLER DE GRADO I',
            'sigla'=> 'INF511'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'INGENIERIA DE SOFTWARE II',
            'sigla'=> 'INF512'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'TECNOLOGIA WEB',
            'sigla'=> 'INF513'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'ARQUITECTURA DEL SOFTWARE',
            'sigla'=> 'INF552'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'GESTION Y ADMINISTRACION DE REDES',
            'sigla'=> 'RDS511'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'REDES INALAMBRIC.Y COMUNIC.MOVILES',
            'sigla'=> 'RDS512'
        ]);

        Materia::create([
            'id_semestre'=> '9',
            'nombre'=>'SEGURIDAD EN REDES Y TRANSMIS.DE DA',
            'sigla'=> 'RDS519'
        ]);


        //Electivas---------------------------------------------------------------
        
        //5to semestre
        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'COSTOS Y PRESUPUESTOS',
            'sigla'=> 'ELC002'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'PROGRAMACION GRAFICA',
            'sigla'=> 'ELC102'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'DISENO DE CIRCUITOS INTEGRADOS',
            'sigla'=> 'ELC201'
        ]);

        

        //6tosemestre
        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'PRODUCCION Y MARKETING',
            'sigla'=> 'ELC003'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'TOPIC.AVANZ.DE PROGRAMAC.',
            'sigla'=> 'ELC103'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'TELEVISION DIGITAL',
            'sigla'=> 'ELC204'
        ]);

        

        //7mo smeestre

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'INGENIERIA DE LA CALIDAD',
            'sigla'=> 'ELC005'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'SISTEMAS DISTRIBUIDOS',
            'sigla'=> 'ELC105'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'LINEAS DE TRANSMIS.Y ANTENAS',
            'sigla'=> 'ELC206'
        ]);

        

        //8vo semestre

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'LEGISL.EN CIENCIAS DE LA COMPUTAC.',
            'sigla'=> 'ELC008'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'CRIPTOGRAFIA Y SEGURIDAD',
            'sigla'=> 'ELC107'
        ]);

        Materia::create([
            'id_semestre'=> '10',
            'nombre'=>'REDES ADHOC',
            'sigla'=> 'ELC208'
        ]);


    }
}

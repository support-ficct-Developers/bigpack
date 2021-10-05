<?php

namespace Database\Seeders;

use App\Models\Pack;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

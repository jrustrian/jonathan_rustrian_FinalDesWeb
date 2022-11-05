<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CriptomonedasSeeder extends Seeder
{

    public function run()
    {
        DB:table('criptomoneda')->insert([
       'logotipo' => 'Logotipo One',
        'nombre' => 'nombre text',
        'precio'=> 'precio One',
        'descripcion'=> 'descripcion One',
        'lenguaje_id'=> 'lenguaje One',

    ]);
    }
}

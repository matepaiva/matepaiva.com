<?php

# database/seeds/UserTableSeeder.php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'           => 'Mate Paiva',
            'image_path'     => 'images/avat.jpg',
            'description_pt' => 'Apaixonado por escrever: seja em linguagem de máquina ou humana. Formado em Jornalismo e pós-graduado em Cibercultura, trabalho com conteúdo web desde 2010. No final de 2012, fiz uma viagem de bicicleta entre SP, MG e RJ que me rendeu muita vivência e ótimas histórias. Em 2015, descobri um novo universo com a programação. Tenho a esperança de nunca parar de aprender.',
            'description_en' => 'Needs to be translated.',
        ]);
    }
}

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
            'description_pt' => 'Apaixonado por escrever: seja em linguagem de máquina ou humana. Formado em Jornalismo e pós-graduado em Cibercultura, mas trabalho com desenvolvimento web desde 2015 - e amando! Meu maior desejo é nunca parar de aprender.',
            'description_en' => 'Passionate about writing: even in machine or human languages. Graduated in journalism and post-graduated in cyberculture, but working with web development since 2015 - and in love with that! My best wish is to never stop learning.',
        ]);
    }
}

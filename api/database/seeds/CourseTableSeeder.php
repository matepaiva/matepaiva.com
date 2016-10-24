<?php

# database/seeds/CourseTableSeeder.php

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'type'        => 'superior',
            'title_pt'    => 'CS50x: Introduction to Computer Science',
            'title_en'    => 'CS50x: Introduction to Computer Science',
            'institution' => 'HarvardX (Harvard University + edX)',
            'category'    => 'Extension',
            'date_start'  => '2016-01-01',
        ]);
        Course::create([
            'type'        => 'superior',
            'title_pt'    => 'PÓS-GRADUAÇÃO: Comunicação Jornalística, enfoque em Cibercultura',
            'title_en'    => 'Post-Graduation: Journalistic Communication focused on Cyberculture',
            'institution' => 'Faculdade Casper Líbero',
            'category'    => 'Post-graduation',
            'date_start'  => '2009-01-01',
            'date_end'    => '2010-12-01',
        ]);
        Course::create([
            'type'        => 'superior',
            'title_pt'    => 'GRADUAÇÃO: Comunicação Social, Jornalismo',
            'title_en'    => 'Graduation: Social Communication, Journalism',
            'institution' => 'Universidade Católica de Santos - UniSantos',
            'category'    => 'Graduation',
            'date_start'  => '2004-01-01',
            'date_end'    => '2008-12-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'https://cursos.alura.com.br/user/mmccpp1/course/fundamentos-http/certificate',
            'title_pt'    => 'HTTP: Entendendo a web por baixo dos panos',
            'title_en'    => 'HTTP: Understanding the web under the hood',
            'institution' => 'Alura',
            'category'    => 'Web',
            'date_end'    => '2016-08-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'https://cursos.alura.com.br/user/mmccpp1/course/java-e-bibliotecas/certificate',
            'title_pt'    => 'Java III: Principais APIs e bibliotecas',
            'title_en'    => 'Java III: Main APIs and libraries',
            'institution' => 'Alura',
            'category'    => 'Java',
            'date_end'    => '2016-07-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'https://cursos.alura.com.br/user/mmccpp1/course/java-e-orientacao-a-objetos/certificate',
            'title_pt'    => 'Java II - Orientação a objetos',
            'title_en'    => 'Java II - Object orientation',
            'institution' => 'Alura',
            'category'    => 'Java',
            'date_end'    => '2016-07-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'https://cursos.alura.com.br/user/mmccpp1/course/primeiros-passos-com-java/certificate',
            'title_pt'    => 'Java I - Primeiros passos',
            'title_en'    => 'Java I - First steps',
            'institution' => 'Alura',
            'category'    => 'Java',
            'date_end'    => '2016-07-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codeschool.com/users/matepaiva/badges/107',
            'title_pt'    => 'Try Ember',
            'title_en'    => 'Try Ember',
            'institution' => 'Code School',
            'category'    => 'JavaScript',
            'date_end'    => '2016-03-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codeschool.com/users/matepaiva/badges/107',
            'title_pt'    => 'Real-time Web with Node.js',
            'title_en'    => 'Real-time Web with Node.js',
            'institution' => 'Code School',
            'category'    => 'JavaScript',
            'date_end'    => '2015-03-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codeschool.com/users/matepaiva/badges/392',
            'title_pt'    => 'Shaping up with Angular.js',
            'title_en'    => 'Shaping up with Angular.js',
            'institution' => 'Code School',
            'category'    => 'JavaScript',
            'date_end'    => '2015-03-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codeschool.com/users/matepaiva/badges/435',
            'title_pt'    => 'JavaScript Best Practices',
            'title_en'    => 'JavaScript Best Practices',
            'institution' => 'Code School',
            'category'    => 'JavaScript',
            'date_end'    => '2015-02-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://beta.openbadges.org/share/fd83f2c7044e5c7ff65165a59f409d30/',
            'title_pt'    => 'JavaScript Road Trip',
            'title_en'    => 'JavaScript Road Trip',
            'institution' => 'Code School',
            'category'    => 'JavaScript',
            'date_end'    => '2015-02-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://ude.my/UC-301F39FO',
            'title_pt'    => 'Aprenda SQL do Zero',
            'title_en'    => 'Learn SQL from scratch',
            'institution' => 'Udemy',
            'category'    => 'SQL',
            'date_end'    => '2016-02-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codecademy.com/matepaiva#completed-body',
            'title_pt'    => 'Learn SQL',
            'title_en'    => 'Learn SQL',
            'institution' => 'Codecademy',
            'category'    => 'SQL',
            'date_end'    => '2016-02-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codecademy.com/matepaiva#completed-body',
            'title_pt'    => 'PHP',
            'title_en'    => 'PHP',
            'institution' => 'Codecademy',
            'category'    => 'PHP',
            'date_end'    => '2015-10-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codecademy.com/matepaiva#completed-body',
            'title_pt'    => 'HTML & CSS',
            'title_en'    => 'HTML & CSS',
            'institution' => 'Codecademy',
            'category'    => 'Web',
            'date_end'    => '2015-10-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://beta.openbadges.org/share/39ece310057788ebf0e4514f51086d33/',
            'title_pt'    => 'Front-end Formations',
            'title_en'    => 'Front-end Formations',
            'institution' => 'Code School',
            'category'    => 'Web',
            'date_end'    => '2015-05-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://beta.openbadges.org/share/39ece310057788ebf0e4514f51086d33/',
            'title_pt'    => 'Front-end Foundations',
            'title_en'    => 'Front-end Foundations',
            'institution' => 'Code School',
            'category'    => 'Web',
            'date_end'    => '2015-04-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'http://www.codecademy.com/matepaiva#completed-body',
            'title_pt'    => 'Learn the Command Line',
            'title_en'    => 'Learn the Command Line',
            'institution' => 'Codecademy',
            'category'    => 'Global',
            'date_end'    => '2015-10-01',
        ]);
        Course::create([
            'type'        => 'standalone',
            'certificate' => 'https://www.codeschool.com/users/matepaiva/badges/121',
            'title_pt'    => 'Try Git',
            'title_en'    => 'Try Git',
            'institution' => 'Code School',
            'category'    => 'Global',
            'date_end'    => '2015-01-01',
        ]);
    }
}

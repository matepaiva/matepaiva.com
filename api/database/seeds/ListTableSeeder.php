<?php

# database/seeds/ListingTableSeeder.php

use App\Models\Listing;
use Illuminate\Database\Seeder;

class ListingTableSeeder extends Seeder
{
    public function run()
    {
        Listing::create([
            'title_pt' => 'Idiomas',
            'title_en' => 'Languages',
            'item_pt' => 'Inglês avançado',
            'item_en' => 'English: advanced level'
        ]);
        Listing::create([
            'title_pt' => 'Idiomas',
            'title_en' => 'Idiomas',
            'item_pt' => 'Espanhol intermediário',
            'item_en' => 'Spanish: intermediate level'
        ]);
        Listing::create([
            'title_pt' => 'Experiência no exterior',
            'title_en' => 'Experience abroad',
            'item_pt' => '6 meses em Bournemouth - Inglaterra | 2006',
            'item_en' => '6 months in Bournemouth - UK | 2006'
        ]);
        Listing::create([
            'title_pt' => 'Prêmios',
            'title_en' => 'Awards',
            'item_pt' => 'Finalista do 3º Prêmio Banco Real Jovem Jornalista. Reportagem: “Lixo deixa de ser lixo” | 2008',
            'item_en' => 'Finalist on "3º Prêmio Banco Real Jovem Jornalista". Reporting: “Trash is not trash anymore” | 2008'
        ]);
        Listing::create([
            'title_pt' => 'Arte de rua',
            'title_en' => 'Street art',
            'item_pt' => 'Viagem de bicicleta (SP-MG-RJ) fazendo intervenções com livretos de poemas | 2013',
            'item_en' => 'Bicyle travel (SP-MG-RJ, Brazil) making artistic interventions with poetry little books | 2013'
        ]);
        Listing::create([
            'title_pt' => 'Arte de rua',
            'title_en' => 'Street art',
            'item_pt' => 'Performances com bolhas de sabão gigantes em SP | 2014',
            'item_en' => 'Artistic performances with giant bubbles in Sao Paulo - Brazil | 2014'
        ]);
    }
}

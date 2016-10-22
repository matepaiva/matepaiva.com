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
            'title_en' => 'Idiomas',
            'item_pt' => 'Inglês avançado',
            'item_en' => 'English advanced'
        ]);
        Listing::create([
            'title_pt' => 'Idiomas',
            'title_en' => 'Idiomas',
            'item_pt' => 'Espanhol intermediário',
            'item_en' => 'Espanhol intermediário'
        ]);
        Listing::create([
            'title_pt' => 'Experiência no exterior',
            'title_en' => 'Experiência no exterior',
            'item_pt' => '6 meses em Bournemouth - Inglaterra | 2006',
            'item_en' => '6 meses em Bournemouth - Inglaterra | 2006'
        ]);
        Listing::create([
            'title_pt' => 'Prêmios',
            'title_en' => 'Prêmios',
            'item_pt' => 'Finalista do 3º Prêmio Banco Real Jovem Jornalista. Reportagem: “Lixo deixa de ser lixo” | 2008',
            'item_en' => 'Finalista do 3º Prêmio Banco Real Jovem Jornalista. Reportagem: “Lixo deixa de ser lixo” | 2008'
        ]);
        Listing::create([
            'title_pt' => 'Arte de rua',
            'title_en' => 'Arte de rua',
            'item_pt' => 'Viagem de bicicleta (SP-MG-RJ) fazendo intervenções com livretos de poemas | 2013',
            'item_en' => 'Viagem de bicicleta (SP-MG-RJ) fazendo intervenções com livretos de poemas | 2013'
        ]);
        Listing::create([
            'title_pt' => 'Arte de rua',
            'title_en' => 'Arte de rua',
            'item_pt' => 'Performances com bolhas de sabão gigantes em SP | 2014',
            'item_en' => 'Performances com bolhas de sabão gigantes em SP | 2014'
        ]);
    }
}

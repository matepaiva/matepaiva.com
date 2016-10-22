<?php

# database/seeds/JobTableSeeder.php

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    public function run()
    {
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Gestão de conteúdo para Agência <b>Artidea</b>',
            'client'         => 'Agência Artidea',
            'logo'           => 'logo.png',
            'description_pt' => 'Após pesquisa do público-alvo da empresa, criei diretrizes de estilo, presença e conteúdo para a marca. Os textos do site foram refeitos sob essas diretrizes - e assim também é criado todo o conteúdo para a fanpage da agência. Além de texto, crio as artes dos posts, avatar e capa da fanpage. Uso conceitos de flat design e abuso da lindeza das tipografias - e, como um bom linux lover, utilizo o Inkscape para fazer essas pequenas proezas. Free software rulez! ;)',
            'imgBaseurl'     => 'images/clients/artidea/',
            'date_start'     => '2016-04-01',
            'date_end'       => '2016-10-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Cobertura do estande <b>Volkswagen</b> no Salão do Automóvel 2014',
            'client'         => 'AlmapBBDO',
            'logo'           => 'logo.png',
            'description_pt' => 'Cobertura da atuação da Volkswagen no Salão do Automóvel 2014. Desbravei o estande em busca de conteúdo para rechear a fanpage, o instagram e um hotsite, sempre de olho nas guidelines da empresa para o evento: \'Desperte seus sonhos\'.',
            'imgBaseurl'     => 'images/clients/volkswagen/',
            'date_start'     => '2014-11-01',
            'date_end'       => '2014-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Campanha <b>#fiquesabendo</b> do Ministério da Saúde',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Criação de conteúdo para Facebook e Twitter do Ministério da Saúde durante a campanha #fiquesabendo. Com o fim do período de carnaval, a campanha incentivava que as pessoas realizassem o teste rápido do vírus HIV. O bacana foi que, além desse objetivo, tive uma grande oportunidade para combater o preconceito contra o soropositivo, defendendo que é possível conviver com a AIDS, mas não com o preconceito.',
            'imgBaseurl'     => 'images/clients/minsaude-fiquesabendo/',
            'date_start'     => '2012-04-01',
            'date_end'       => '2012-04-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Ministério da Saúde: campanha <b>#saúdenaescola</b>',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Mais uma vez criando conteúdo para Facebook e Twitter do Ministério da Saúde, desta vez fui pautado pela campanha #saúdenaescola, a primeiríssima campanha desse tipo realizada pelo governo. O objetivo era levantar a bola da necessidade da reeducação alimentar, focando o tema na obesidade infantil e juvenil.',
            'imgBaseurl'     => 'images/clients/minsaude-saudenaescola/',
            'date_start'     => '2012-03-01',
            'date_end'       => '2012-03-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Ministério da Saúde: campanha <b>#usecamisinha</b>',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'É carnaval! O Ministério da Saúde fez uma ação no Facebook e Twitter para relembrar a galera de usar camisinha se o clima esquentar. A cereja do bolo: além da fan page, criamos no Facebook um perfil chamado \'Camisinha Internauta\' e saímos por aí cutucando geral! As cutucadas estavam em alta na época. Então, conforme a interação se desenrolava, a gente se envolvia nas conversas e puxava a sardinha para a conscientização.',
            'imgBaseurl'     => 'images/clients/minsaude-usecamisinha/',
            'date_start'     => '2012-03-02',
            'date_end'       => '2012-03-02',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Artex</b>: Iniciar presença nas redes sociais',
            'client'         => 'Agência Artidea',
            'logo'           => 'logo.png',
            'description_pt' => 'A Artex abriu suas redes sociais quando, pela primeira vez, abria lojas próprias. Para consolidar a mudança, dividiu a marca em quatro lifestyles e convidou embaixadoras. Em <b>\'A\'</b>, de Atual, temos Elisa Stecca. Carla Pernambuco, <b>R</b>elax. Didi Wagner é <b>T</b>endência. Cristiana Arcangeli, pura <b>E</b>legance. O <b>X</b>? É porque Artex combina com tudo.<br><br>Acompanhei as gravações para conhecer as embaixadoras e escrever os perfis que representavam cada estilo. A presença nas redes sociais também foi pautada por esses quadrantes.',
            'imgBaseurl'     => 'images/clients/artex/',
            'date_start'     => '2011-12-01',
            'date_end'       => '2012-04-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Vivo</b>: redator do blog e das redes sociais',
            'client'         => 'Wunderman',
            'logo'           => 'logo.png',
            'description_pt' => 'Explorei os serviços disponibilizados pela Vivo, tirei dúvidas, fiz review de smartphone, mas uma coisa era certa: todo dia tinha texto novo no blog. Além de cuidar do Facebook da empresa, também tratei de produzir conteúdo no Twitter para @Vivoemrede, @VivoOn e @Vivoblog.',
            'imgBaseurl'     => 'images/clients/vivo/',
            'date_start'     => '2011-01-01',
            'date_end'       => '2011-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Cup Noodles</b>: cobertura da Campus Party',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Ah, quer lugar mais maravilhoso pra trabalhar do que a Campus Party? O objetivo era colocar a marca em evidência dentro daquele contexto. Fizemos promoções (algumas hilárias, porque a gente soltava no Twitter algumas competições e as pessoas vinham <b>literalmente</b> correndo até a gente) - mas o mais legal era fazer o boneco gigante da Cup Noodles interagir, em fotos, com a festa.',
            'imgBaseurl'     => 'images/clients/cupnoodles/',
            'date_start'     => '2011-01-01',
            'date_end'       => '2011-01-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Red Bull House of Art</b>: cobertura da residência artística',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Cobertura da primeira edição da Red Bull House of Art (RBHOA) tanto no Twitter quanto em um <a href="https://diarioredbullhouseofart.wordpress.com" target="_blank">blog</a> específico para o evento. A residência artística rolou no Edifício Sampaio Moreira, o primeiro arranha-céu de São Paulo, e eu tive o privilégio de conviver com os artistas diariamente. Conversávamos muito, fazia algumas fotos, e dali saía conteúdo pro blog. No meio dos artistas eu era um penetra, como um bom jornalista.',
            'imgBaseurl'     => 'images/clients/redbull/',
            'date_start'     => '2010-10-01',
            'date_end'       => '2010-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Cobertura do Salão do Automóvel para a <b>Renault</b>',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Como estávamos sem fotógrafo, o desafio era: produzir conteúdo, tirar foto - e ainda divulgar o link ao vivo que estávamos mantendo do estande da Renault. Corrido. Deu tudo certo. Do jeito que eu gosto.<br><br>Ah, um tempinho depois fiz a cobertura de um evento de test-drive do Renault Fluence no Autódromo Interlagos. Claro que dirigi.',
            'imgBaseurl'     => 'images/clients/renault/',
            'date_start'     => '2010-10-01',
            'date_end'       => '2010-10-01',
        ]);

        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Desenvolvedor Angular para <b>CTIS</b>',
            'client'         => 'CTIS',
            'description_pt' => 'Seguindo metodologia ágil e orientado pelas histórias de usuário, ajudo a desenvolver as telas do sistema. Como é um projeto interno, não posso divulgar nenhuma imagem deste trabalho. Além de fazer a integração com o backend e cuidar do design, desenvolvi também uma diretriz para melhorar a usabilidade do sistema. Eis a vantagem de ser um imigrante vindo dos mundos das humanas e do marketing - ter sensibilidade para enxergar o produto além do sistema, ou seja, enxergar como o usuário.',
            'imgBaseurl'     => 'images/clients/ctis/',
            'date_start'     => '2016-06-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Web apps: desafios de matemática para <b>Obmep</b>',
            'client'         => 'Curso Arquimedes',
            'description_pt' => 'Desenvolver jogos de matemática interativos online, utilizando HTML5, Bootstrap, JavaScript, JSXGraph e MathJax. Recebo as atribuições do desafio e implemento, de modo que, sempre que o estudante jogar, um desafio com novos valores e variáveis esteja disponível para ele. Também deve-se fazer a correção dos resultados e mostrar o passo-a-passo na solução, de forma automatizada.',
            'imgBaseurl'     => 'images/clients/obmep/',
            'date_start'     => '2016-03-01',
            'date_end'       => '2016-09-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Script <b>Smash</b>: Snippet Manager from Bash',
            'client'         => 'Eu mesmo =]',
            'description_pt' => 'É um programa linux que desenvolvi para evitar escrever a mesma coisa sempre e sempre. Assim, eu aciono um comando de teclado que, associado a uma palavra-chave que eu tiver acabado de escrever, transforma essa palavra-chave em um texto previamente salvo no meu computador. O legal é que é um programa completamente sem interface gráfica: pode-se interagir com ele enquanto usa outros programas. Desenvolvido em Bash.<br><br>Visite a <a href="https://github.com/matepaiva/smash-snippets" target="_blank">documentação no GitHub</a>.',
            'imgBaseurl'     => 'images/clients/smash/',
            'date_start'     => '2016-03-01',
            'date_end'       => '2016-03-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Coming Soon Page para o restaurante <b>Ró Raw & Wine</b>',
            'client'         => 'sahelizabeth.com',
            'description_pt' => 'Criar página responsiva a partir do PSD do cliente.',
            'imgBaseurl'     => 'images/clients/ro-raw/',
            'date_start'     => '2016-02-01',
            'date_end'       => '2016-02-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Month <b>Calendar</b> Generator API',
            'client'         => 'Eu mesmo =]',
            'description_pt' => 'Criei um módulo que instala uma folha de calendário para uma determinada data, com opções para marcar eventos. Totalmente estilizado por CSS. Feito em JavaScript puro. Desenvolvi para treinar - e também porque a maior parte dos módulos de calendário são em JQuery, Angular ou outro Framework, e eu queria um módulo puro.<br><br>Visite a <a href="https://github.com/matepaiva/month-calendar-generator" target="_blank">documentação no GitHub</a>.',
            'imgBaseurl'     => 'images/clients/month-calendar/',
            'date_start'     => '2016-02-01',
            'date_end'       => '2016-02-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Mate <b>Carousel</b> API',
            'client'         => 'Eu mesmo =]',
            'description_pt' => 'Módulo que transforma elementos de uma classe em slides e expõe uma API para controle. Feito em JavaScript Puro, pode ser usado como slide de imagens ou mesmo de uma seção completa de um aplicativo. É responsivo.<br><br>Visite a <a href="https://github.com/matepaiva/mateCarousel" target="_blank">documentação no GitHub</a>.',
            'imgBaseurl'     => 'images/clients/carousel/',
            'date_start'     => '2016-01-01',
            'date_end'       => '2016-01-01',
        ]);
    }
}

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
            'title_en'       => 'Content management to <b>Artidea</b> Agency',
            'client'         => 'Agência Artidea',
            'logo'           => 'logo.png',
            'description_pt' => 'Após pesquisa do público-alvo da empresa, criei diretrizes de estilo, presença e conteúdo para a marca. Os textos do site foram refeitos sob essas diretrizes - e assim também foi criado todo o conteúdo para a fanpage da agência. Além de texto, crio as artes dos posts, avatar e capa da fanpage. Uso conceitos de flat design e abuso da lindeza das tipografias - e, como um bom linux lover, utilizo o Inkscape para fazer essas pequenas proezas. Free software rulez! ;)',
            'description_en' => 'After doing a research to define the target-market for the company, I created a style, presence and content guidelines for the brand. The website texts was refactored under thses guidelines, and so was produced all of the content for the Facebook fan page. I also make the post arts, using flat design concepts and playing with the beauty of fonts. And, as a good linux lover, I use Inkscape to do these little tricks. Free software rulez! ;)',
            'imgBaseurl'     => 'images/clients/artidea/',
            'date_start'     => '2016-04-01',
            'date_end'       => '2016-10-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Cobertura do estande <b>Volkswagen</b> no Salão do Automóvel 2014',
            'title_en'       => 'Media coverage of the <b>Volkswagen</b>\'s stand in Automobile Trade Show',
            'client'         => 'AlmapBBDO',
            'logo'           => 'logo.png',
            'description_pt' => 'Cobertura da atuação da Volkswagen no Salão do Automóvel 2014. Desbravei o estande em busca de conteúdo para rechear a fanpage, o instagram e um hotsite, sempre de olho nas guidelines da empresa para o evento: \'Desperte seus sonhos\'.',
            'description_en' => 'Journalistic coverage of Volkswagen presence in Automobile Trade Show 2014, Brazil. I ventured in the stand looking for quality content to fill the Facebook fan page, Instagram and an hotsite, always respecting the company guidelines for the event: \'Unleash your dreams\'.',
            'imgBaseurl'     => 'images/clients/volkswagen/',
            'date_start'     => '2014-11-01',
            'date_end'       => '2014-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Campanha <b>#fiquesabendo</b> do Ministério da Saúde',
            'title_en'       => '<b>#fiquesabendo</b> (#gettoknow) campaign for Brazilian Health Ministry\'s',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Criação de conteúdo para Facebook e Twitter do Ministério da Saúde durante a campanha #fiquesabendo. Com o fim do período de carnaval, a campanha incentivava que as pessoas realizassem o teste rápido do vírus HIV. O bacana foi que, além desse objetivo, tive uma grande oportunidade para combater o preconceito contra o soropositivo, defendendo que é possível conviver com a AIDS, mas não com o preconceito.',
            'description_en' => 'Content creation for Facebook and Twitter of Brazilian Health Ministry\'s, during the campaign #fiquesabendo, about SIDA tests. With the end of carnival period, the campaign encourages people to do the quick HIV test. The amazing thing was that, besides this goal, we had a great opportunity to fight the prejudice against the seropositive people. After all, it is possibile to with with SIDA, but not with prejudice.',
            'imgBaseurl'     => 'images/clients/minsaude-fiquesabendo/',
            'date_start'     => '2012-04-01',
            'date_end'       => '2012-04-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Ministério da Saúde: campanha <b>#saúdenaescola</b>',
            'title_en'       => 'Brazilian Health Ministry\'s: campaign <b>#saúdenaescola</b> (#healthinschool)',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'One more time creating content for Facebook and Twiiter of Mais uma vez criando conteúdo para Facebook e Twitter do Ministério da Saúde, desta vez fui pautado pela campanha #saúdenaescola, a primeiríssima campanha desse tipo realizada pelo governo. O objetivo era levantar a bola da necessidade da reeducação alimentar, focando o tema na obesidade infantil e juvenil.',
            'description_en' => 'Mais uma vez criando conteúdo para Facebook e Twitter Brazilian Health Ministry\'s, this time guided for the campaign #saúdenaescola (health in school), the very first campaing about this theme accomplished by the government. My goal was to highlight the need for a nutritional education, focusing the theme on child obesity.',
            'imgBaseurl'     => 'images/clients/minsaude-saudenaescola/',
            'date_start'     => '2012-03-01',
            'date_end'       => '2012-03-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Ministério da Saúde: campanha <b>#usecamisinha</b>',
            'title_en'       => 'Brazilian Health Ministry\'s: campaign <b>#usecamisinha</b> (#wearcondom)',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'É carnaval! O Ministério da Saúde fez uma ação no Facebook e Twitter para relembrar a galera de usar camisinha se o clima esquentar. A cereja do bolo: além da fan page, criamos no Facebook um perfil chamado \'Camisinha Internauta\' e saímos por aí cutucando geral! As cutucadas estavam em alta na época. Então, conforme a interação se desenrolava, a gente se envolvia nas conversas e puxava a sardinha para a conscientização.',
            'description_en' => 'It\'s carnvival! Brazilian Health Ministry\'s produced an action on Facebook and Twitter to remember people to wear condom if the things go warmer. The cherry cake: besides the fan page, we created a Facebook profile called \'Camisinha Internauta\' (Netizen Condom) and we went around the web poking the people! So, we get involved into conversations and took the opportunity to talk about safe sex awareness.',
            'imgBaseurl'     => 'images/clients/minsaude-usecamisinha/',
            'date_start'     => '2012-03-02',
            'date_end'       => '2012-03-02',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Artex</b>: Iniciar presença nas redes sociais',
            'title_en'       => '<b>Artex</b>: Begin the social network presence',
            'client'         => 'Agência Artidea',
            'logo'           => 'logo.png',
            'description_pt' => 'A Artex abriu suas redes sociais quando, pela primeira vez, abria lojas próprias. Para consolidar a mudança, dividiu a marca em quatro lifestyles e convidou embaixadoras. Em <b>\'A\'</b>, de Atual, temos Elisa Stecca. Carla Pernambuco, <b>R</b>elax. Didi Wagner é <b>T</b>endência. Cristiana Arcangeli, pura <b>E</b>legance. O <b>X</b>? É porque Artex combina com tudo.<br><br>Acompanhei as gravações para conhecer as embaixadoras e escrever os perfis que representavam cada estilo. A presença nas redes sociais também foi pautada por esses quadrantes.',
            'description_en' => 'Artex opened its social networks when, for the first time, it was opening its own stores. To consolidate this change, Artex splitted the brand into four lifestyles and invited ambassadors. In \'A\', from Atual (up to date), we have Elisa Stecca. Carla Pernambuco, <b>R</b>elax. Didi Wagner is <b>T</b>endência (trend). Cristiana Arcangeli, pure <b>E</b>legance. The <b>X</b>? It\'s because Artex matches everything.',
            'imgBaseurl'     => 'images/clients/artex/',
            'date_start'     => '2011-12-01',
            'date_end'       => '2012-04-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Vivo</b>: redator do blog e das redes sociais',
            'title_en'       => '<b>Vivo</b>: blog and social media writer',
            'client'         => 'Wunderman',
            'logo'           => 'logo.png',
            'description_pt' => 'Explorei os serviços disponibilizados pela Vivo, tirei dúvidas, fiz review de smartphone, mas uma coisa era certa: todo dia tinha texto novo no blog. Além de cuidar do Facebook da empresa, também tratei de produzir conteúdo no Twitter para @Vivoemrede, @VivoOn e @Vivoblog.',
            'description_en' => 'I explored Vivo mobile services, solved public doubts, made smartphone, but one thing was right: every day there was a new text in the blog. I also used to create content for Twitter at @Vivoemrede, @VivoOn e @Vivoblog.',
            'imgBaseurl'     => 'images/clients/vivo/',
            'date_start'     => '2011-01-01',
            'date_end'       => '2011-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Cup Noodles</b>: cobertura da Campus Party',
            'title_en'       => '<b>Cup Noodles</b>: media coverage of Campus Party',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Ah, quer lugar mais maravilhoso pra trabalhar do que a Campus Party? O objetivo era colocar a marca em evidência dentro daquele contexto. Fizemos promoções (algumas hilárias, porque a gente soltava no Twitter algumas competições e as pessoas vinham <b>literalmente</b> correndo até a gente) - mas o mais legal era fazer o boneco gigante da Cup Noodles interagir, em fotos, com a festa.',
            'description_en' => 'Campus Party, what a wonderful place to work! My goal was to evidence the brand within the event context. We did promotions (some hilarious, because we release in Twitter some races and people came untill us <b>literally</b> running) - but the coolest thing was to make the giant Cup Noodles doll to interact in photos with the party.',
            'imgBaseurl'     => 'images/clients/cupnoodles/',
            'date_start'     => '2011-01-01',
            'date_end'       => '2011-01-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => '<b>Red Bull House of Art</b>: cobertura da residência artística',
            'title_en'       => '<b>Red Bull House of Art</b>: artistic residence coverage',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Cobertura da primeira edição da Red Bull House of Art (RBHOA) tanto no Twitter quanto em um <a href="https://diarioredbullhouseofart.wordpress.com" target="_blank">blog</a> específico para o evento. A residência artística rolou no Edifício Sampaio Moreira, o primeiro arranha-céu de São Paulo, e eu tive o privilégio de conviver com os artistas diariamente. Conversávamos muito, fazia algumas fotos, e dali saía conteúdo pro blog. No meio dos artistas eu era um penetra, como um bom jornalista.',
            'description_en' => 'Journalistic coverage of the first edition of Red Bull House of Art (RBHOA), on Twitter and on a specific <a href="https://diarioredbullhouseofart.wordpress.com" target="_blank">blog</a> to the event. The artistic residence happened at the building Sampaio Moreira, the first skyscraper of São Paulo, and I had the privilegy to spent my time with the artists every day. We talked a lot, shut some photos, and suddenly we have content to the blog. In the middle of the artists I was a gatecrasher, as all good journalists.',
            'imgBaseurl'     => 'images/clients/redbull/',
            'date_start'     => '2010-10-01',
            'date_end'       => '2010-11-01',
        ]);
        Job::create([
            'type'           => 'writer',
            'title_pt'       => 'Cobertura do Salão do Automóvel para a <b>Renault</b>',
            'title_en'       => 'Journalistic coverage for <b>Renault</b> at Automobile Trade Show',
            'client'         => 'Agência Riot',
            'logo'           => 'logo.png',
            'description_pt' => 'Como estávamos sem fotógrafo, o desafio era: produzir conteúdo, tirar foto - e ainda divulgar o link ao vivo que estávamos mantendo do estande da Renault. Corrido. Deu tudo certo. Do jeito que eu gosto.',
            'description_en' => 'We had no photographer. So the challenge was: to produce content, shut photos - and ainda spread the real time link that we were maintaining covering the Renault\'s stand. Busy day. Everything went right. The way I like it.',
            'imgBaseurl'     => 'images/clients/renault/',
            'date_start'     => '2010-10-01',
            'date_end'       => '2010-10-01',
        ]);

        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Desenvolvedor Angular para <b>CTIS</b>',
            'title_en'       => 'Angular developer at <b>CTIS</b>',
            'client'         => 'CTIS',
            'description_pt' => 'Desenvolvimento de um sistema web de controle de chamados e ordens de serviços. <b>Front-end em Angular e Sass</b>, integrando com Rest API de back-end em Java (Spring). Controle de versão com Git. Atuo também na melhoria da usabilidade do sistema.',
            'description_en' => 'Development of a web system which controls requests and service orders. <b>Front-end using Angular and Sass</b>, integrating with Rest API from back-end using Java (Spring). Version control with Git. I act as well improving the system usability (UX).',
            'imgBaseurl'     => 'images/clients/ctis/',
            'date_start'     => '2016-06-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Web apps: desafios de matemática para <b>Obmep</b>',
            'title_en'       => 'Web apps: math puzzles for <b>Obmep</b>',
            'client'         => 'Curso Arquimedes',
            'description_pt' => 'Desenvolvimento de desafios interativos de matemática. Tecnologias: HTML5, JQuery, Bootstrap, JavaScript, JSXGraph e MathJax.',
            'description_en' => 'Development of interactive math puzzles. Techs: HTML5, JQuery, Bootstrap, JavaScript, JSXGraph e MathJax.',
            'imgBaseurl'     => 'images/clients/obmep/',
            'date_start'     => '2016-03-01',
            'date_end'       => '2016-09-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Script <b>Smash</b>: Snippet Manager from Bash',
            'title_en'       => 'Script <b>Smash</b>: Snippet Manager from Bash',
            'client'         => 'Myself =]',
            'description_pt' => 'É um programa linux que desenvolvi para evitar escrever a mesma coisa sempre e sempre. Assim, eu aciono um comando de teclado que, associado a uma palavra-chave que eu tiver acabado de escrever, transforma essa palavra-chave em um texto previamente salvo no meu computador. O legal é que é um programa completamente sem interface gráfica: pode-se interagir com ele enquanto usa outros programas. Desenvolvido em Bash.<br><br>Visite a <a href="https://github.com/matepaiva/smash-snippets" target="_blank">documentação no GitHub</a>.',
            'description_en' => 'It is a script I developed to avoid writing the same thing on and on. I add a keyboard shortcut which transform a keyword into a previously saved text. The coolest thing is that has zero graphic interface: you interact with it while use other programs. Developed in Bash. <br><br>Visit the <a href="https://github.com/matepaiva/smash-snippets" target="_blank">documentation on GitHub</a>.',
            'imgBaseurl'     => 'images/clients/smash/',
            'date_start'     => '2016-03-01',
            'date_end'       => '2016-03-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Coming Soon Page para o restaurante <b>Ró Raw & Wine</b>',
            'title_en'       => 'Coming Soon Page for restaurant <b>Ró Raw & Wine</b>',
            'client'         => 'sahelizabeth.com',
            'description_pt' => 'Criar página responsiva a partir do PSD do cliente.',
            'description_en' => 'Criate responsive page from client\'s PSD.',
            'imgBaseurl'     => 'images/clients/ro-raw/',
            'date_start'     => '2016-02-01',
            'date_end'       => '2016-02-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Month <b>Calendar</b> Generator API',
            'title_en'       => 'Month <b>Calendar</b> Generator API',
            'client'         => 'Myself =]',
            'description_pt' => 'Criei um módulo que instala uma folha de calendário para uma determinada data, com opções para marcar eventos. Totalmente estilizado por CSS. Feito em JavaScript puro. Desenvolvi para treinar - e também porque a maior parte dos módulos de calendário são em JQuery, Angular ou outro Framework, e eu queria um módulo puro.<br><br>Visite a <a href="https://github.com/matepaiva/month-calendar-generator" target="_blank">documentação no GitHub</a>.',
            'description_en' => 'We ask you a year and a month -- and we return to you the sheet of that period in 3 different ways: as an array of arrays (6 lines with 7 days in each), as an table with all the content and a bunch of classes set up, or as divs inside divs, instead of a table but with the same features (just for those who has a problem with tables).<br><br>Visit the <a href="https://github.com/matepaiva/month-calendar-generator" target="_blank">documentation on GitHub</a>.',
            'imgBaseurl'     => 'images/clients/month-calendar/',
            'date_start'     => '2016-02-01',
            'date_end'       => '2016-02-01',
        ]);
        Job::create([
            'type'           => 'developer',
            'title_pt'       => 'Mate <b>Carousel</b> API',
            'title_en'       => 'Mate <b>Carousel</b> API',
            'client'         => 'Myself =]',
            'description_pt' => 'Módulo que transforma elementos de uma classe em slides e expõe uma API para controle. Feito em JavaScript Puro, pode ser usado como slide de imagens ou mesmo de uma seção completa de um aplicativo. É responsivo.<br><br>Visit the <a href="https://github.com/matepaiva/mateCarousel" target="_blank">documentation on GitHub</a>.',
            'description_en' => 'mateCarousel is a lightweight carousel with a simple API. It transform class element into slides and give you the control of it, using a config object and some API commands to use on the go.<br><br>Visit the <a href="https://github.com/matepaiva/mateCarousel" target="_blank">documentation on GitHub</a>.',
            'imgBaseurl'     => 'images/clients/carousel/',
            'date_start'     => '2016-01-01',
            'date_end'       => '2016-01-01',
        ]);
    }
}

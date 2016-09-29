'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:WriterCtrl
 * @description
 * # WriterCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('WriterCtrl', function ($scope) {
        $scope.name = "Social Media Content";
        $scope.phrases = [
            "Estes são alguns dos trabalhos que já fiz com conteúdo digital. Vou te fazer companhia. Fica à vontade.",
            "Também já trabalhei com redação offline: desde revisão à criação de um livro completo como ghost writer!",
            "Mas minha maior experiência é nas mídias digitais. Desde 2009... puxa.",
            "Troco uns flertes com design, Inkscape, Gimp. Não é minha área, mas Social Media tem um pezinho nisso tudo, né?",
            "E escrevo poemas. Tenho inclusive alguns livretos impressos! Se quiser acompanhar meu trabalho é só curtir a fanpage <a href='http://fb.com/matetrotamundo' target='_blank'>Mate Trotamundo</a> =]",
            "Em 2013 tirei um ano sabático e saí viajando de bicicleta entre MG, RJ e SP, divulgando meus livretos. Bicicleta, poesia e arte de rua, três paixões.",
            "Ops! Acabei esticando esse ano sabático. Em 2014 me envolvi com intervenções com Bolhas de Sabão Gigantes, já estacionado em SP.",
            "Em 2014, decidi também estudar programação. Pronto, mais uma paixão. Agora sou esse ser de humanas e exatas ao mesmo tempo. ",
            "Mas o que aspiro mesmo, mesmo, mesmo, é nunca parar de aprender. O maior presente que o jornalismo me deu foi a curiosidade.",
            "Então é isso. Se quiser conhecer outros trabalhos, não hesite em me procurar! Meu contato está na área « Quem é Mate Paiva? ».",
        ];
        $scope.jobs = [{
            title: "Gestão de conteúdo para Agência <b>Artidea</b>",
            client: "Agência Artidea",
            logo: "logo.png",
            description: "Após pesquisa do público-alvo da empresa, criei diretrizes de estilo, presença e conteúdo para a marca. Os textos do site foram refeitos sob essas diretrizes - e assim também é criado todo o conteúdo para a fanpage da agência. Além de texto, crio as artes dos posts, avatar e capa da fanpage. Uso conceitos de flat design e abuso da lindeza das tipografias - e, como um bom linux lover, utilizo o Inkscape para fazer essas pequenas proezas. Free software rulez! ;)",
            imgBaseurl: "images/clients/artidea/",
            imgs: [{
                size: 1,
                src: "img6.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 2,
                src: "img3.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 2,
                src: "img5.png"
            }, {
                size: 1,
                src: "img1.png"
            }],
            date: {
                start: new Date(2016, 3),
                end: new Date()
            },
        }, {
            title: "Cobertura do estande <b>Volkswagen</b> no Salão do Automóvel 2014",
            client: "AlmapBBDO",
            logo: "logo.png",
            description: "Cobertura da atuação da Volkswagen no Salão do Automóvel 2014. Desbravei o estande em busca de conteúdo para rechear a fanpage, o instagram e um hotsite, sempre de olho nas guidelines da empresa para o evento: \"Desperte seus sonhos\".",
            imgBaseurl: "images/clients/volkswagen/",
            imgs: [{
                size: 2,
                src: "img1.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 2,
                src: "img3.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 1,
                src: "img5.png"
            }, {
                size: 1,
                src: "img6.png"
            }, {
                size: 1,
                src: "img7.png"
            }, {
                size: 1,
                src: "img8.png"
            }],
            date: {
                start: new Date(2014, 10),
                end: new Date(2014, 10)
            },
        }, {
            title: "Campanha <b>#fiquesabendo</b> do Ministério da Saúde",
            client: "Agência Riot",
            logo: "logo.png",
            description: "Criação de conteúdo para Facebook e Twitter do Ministério da Saúde durante a campanha #fiquesabendo. Com o fim do período de carnaval, a campanha incentivava que as pessoas realizassem o teste rápido do vírus HIV. O bacana foi que, além desse objetivo, tive uma grande oportunidade para combater o preconceito contra o soropositivo, defendendo que é possível conviver com a AIDS, mas não com o preconceito.",
            imgBaseurl: "images/clients/minsaude-fiquesabendo/",
            imgs: [{
                size: 3,
                src: "img1.png"
            }, {
                size: 3,
                src: "img2.png"
            }, {
                size: 3,
                src: "img3.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 2,
                src: "img5.png"
            }, {
                size: 2,
                src: "img6.png"
            }, {
                size: 2,
                src: "img7.png"
            }],
            date: {
                start: new Date(2012, 3),
                end: new Date(2012, 3)
            },
        }, {
            title: "Ministério da Saúde: campanha <b>#saúdenaescola</b>",
            client: "Agência Riot",
            logo: "logo.png",
            description: "Mais uma vez criando conteúdo para Facebook e Twitter do Ministério da Saúde, desta vez fui pautado pela campanha #saúdenaescola, a primeiríssima campanha desse tipo realizada pelo governo. O objetivo era levantar a bola da necessidade da reeducação alimentar, focando o tema na obesidade infantil e juvenil.",
            imgBaseurl: "images/clients/minsaude-saudenaescola/",
            imgs: [{
                size: 2,
                src: "img1.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 1,
                src: "img3.png"
            }, {
                size: 2,
                src: "img4.png"
            }],
            date: {
                start: new Date(2012, 2),
                end: new Date(2012, 2)
            },
        }, {
            title: "Ministério da Saúde: campanha <b>#usecamisinha</b>",
            client: "Agência Riot",
            logo: "logo.png",
            description: "É carnaval! O Ministério da Saúde fez uma ação no Facebook e Twitter para relembrar a galera de usar camisinha se o clima esquentar. A cereja do bolo: além da fan page, criamos no Facebook um perfil chamado \"Camisinha Internauta\" e saímos por aí cutucando geral! As cutucadas estavam em alta na época. Então, conforme a interação se desenrolava, a gente se envolvia nas conversas e puxava a sardinha para a conscientização.",
            imgBaseurl: "images/clients/minsaude-usecamisinha/",
            imgs: [{
                size: 2,
                src: "img6.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 2,
                src: "img5.png"
            }, {
                size: 2,
                src: "img3.png"
            }, {
                size: 2,
                src: "img1.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 2,
                src: "img7.png"
            }],
            date: {
                start: new Date(2012, 1),
                end: new Date(2012, 1)
            },
        }, {
            title: "<b>Artex</b>: Iniciar presença nas redes sociais",
            client: "Agência Artidea",
            logo: "logo.png",
            description: "A Artex abriu suas redes sociais quando, pela primeira vez, abria lojas próprias. Para consolidar a mudança, dividiu a marca em quatro lifestyles e convidou embaixadoras. Em <b>\"A\"</b>, de Atual, temos Elisa Stecca. Carla Pernambuco, <b>R</b>elax. Didi Wagner é <b>T</b>endência. Cristiana Arcangeli, pura <b>E</b>legance. O <b>X</b>? É porque Artex combina com tudo.<br><br>Acompanhei as gravações para conhecer as embaixadoras e escrever os perfis que representavam cada estilo. A presença nas redes sociais também foi pautada por esses quadrantes.",
            imgBaseurl: "images/clients/artex/",
            imgs: [{
                size: 1,
                src: "img1.png"
            }, {
                size: 1,
                src: "img2.png"
            }, {
                size: 1,
                src: "img3.png"
            }, {
                size: 1,
                src: "img4.png"
            }, {
                size: 2,
                src: "img5.png"
            }, {
                size: 2,
                src: "img6.png"
            }, {
                size: 2,
                src: "img7.png"
            }, {
                size: 2,
                src: "img8.png"
            }, {
                size: 2,
                src: "img9.png"
            }],
            date: {
                start: new Date(2011, 11),
                end: new Date(2012, 3)
            },
        }, {
            title: "<b>Vivo</b>: redator do blog e das redes sociais",
            client: "Wunderman",
            logo: "logo.png",
            description: "Explorei os serviços disponibilizados pela Vivo, tirei dúvidas, fiz review de smartphone, mas uma coisa era certa: todo dia tinha texto novo no blog. Além de cuidar do Facebook da empresa, também tratei de produzir conteúdo no Twitter para @Vivoemrede, @VivoOn e @Vivoblog.",
            imgBaseurl: "images/clients/vivo/",
            imgs: [{
                size: 1,
                src: "img1.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 2,
                src: "img3.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 2,
                src: "img5.png"
            }, {
                size: 2,
                src: "img6.png"
            }, {
                size: 2,
                src: "img7.png"
            }, {
                size: 2,
                src: "img9.png"
            }],
            date: {
                start: new Date(2011, 8),
                end: new Date(2011, 0)
            },
        }, {
            title: "<b>Cup Noodles</b>: cobertura da Campus Party",
            client: "Agência Riot",
            logo: "logo.png",
            description: "Ah, quer lugar mais maravilhoso pra trabalhar do que a Campus Party? O objetivo era colocar a marca em evidência dentro daquele contexto. Fizemos promoções (algumas hilárias, porque a gente soltava no Twitter algumas competições e as pessoas vinham <b>literalmente</b> correndo até a gente) - mas o mais legal era fazer o boneco gigante da Cup Noodles interagir, em fotos, com a festa.",
            imgBaseurl: "images/clients/cupnoodles/",
            imgs: [{
                size: 2,
                src: "img1.png"
            }, {
                size: 2,
                src: "img4.png"
            }, {
                size: 2,
                src: "img3.png"
            }, {
                size: 2,
                src: "img2.png"
            }],
            date: {
                start: new Date(2011, 0),
                end: new Date(2011, 0)
            },
        }, {
            title: "<b>Red Bull House of Art</b>: cobertura da residência artística",
            client: "Agência Riot",
            logo: "logo.png",
            description: "Cobertura da primeira edição da Red Bull House of Art (RBHOA) tanto no Twitter quanto em um <a href='https://diarioredbullhouseofart.wordpress.com' target='_blank'>blog</a> específico para o evento. A residência artística rolou no Edifício Sampaio Moreira, o primeiro arranha-céu de São Paulo, e eu tive o privilégio de conviver com os artistas diariamente. Conversávamos muito, fazia algumas fotos, e dali saía conteúdo pro blog. No meio dos artistas eu era um penetra, como um bom jornalista.",
            imgBaseurl: "images/clients/redbull/",
            imgs: [{
                size: 1,
                src: "img1.png"
            }, {
                size: 1,
                src: "img4.png"
            }, {
                size: 1,
                src: "img3.png"
            }, {
                size: 1,
                src: "img2.png"
            }],
            date: {
                start: new Date(2010, 9),
                end: new Date(2010, 10)
            },
        }, {
            title: "Cobertura do Salão do Automóvel para a <b>Renault</b>",
            client: "Agência Riot",
            logo: "logo.png",
            description: "Como estávamos sem fotógrafo, o desafio era: produzir conteúdo, tirar foto - e ainda divulgar o link ao vivo que estávamos mantendo do estande da Renault. Corrido. Deu tudo certo. Do jeito que eu gosto.<br><br>Ah, um tempinho depois fiz a cobertura de um evento de test-drive do Renault Fluence no Autódromo Interlagos. Claro que dirigi.",
            imgBaseurl: "images/clients/renault/",
            imgs: [{
                size: 2,
                src: "img1.png"
            }, {
                size: 2,
                src: "img2.png"
            }, {
                size: 2,
                src: "img3.png"
            }],
            date: {
                start: new Date(2010, 9),
                end: new Date(2010, 9)
            },
        }];
        $scope.jobIndex = 0;
        $scope.job = $scope.jobs[$scope.jobIndex];

        $scope.showThisJob = function (job) {
            $scope.jobIndex = job;
            $scope.job = $scope.jobs[job];
            $window.scrollTo(0, 0);
        };
        $scope.isDateNow = function (date) {
            var d = new Date();
            if (date.getMonth() === d.getMonth() && date.getYear() === d.getYear()) {
                return false;
            } else {
                return true;
            }
        };
    });

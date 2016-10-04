'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:DeveloperCtrl
 * @description
 * # DeveloperCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('DeveloperCtrl', function ($window, $scope) {
        this.awesomeThings = [1,2,3];
        $scope.pageClass = 'page-developer';
        $scope.name = 'Web Developer';
        $scope.phrases = [
            'Vou mostrar pra você alguns trabalhos que fiz em Desenvolvimento Web. Vamos lá.',
            'Sou jornalista, mas me apaixonei por JavaScript no final de 2014. Desde então sigo estudando, autodidata, todos os dias!',
            'Dá um pulinho no meu <a href="https://github.com/matepaiva" target="_blank">Github</a> também! =]',
            'Este site que vos fala foi, ele mesmo, feito em <b>AngularJS</b>! Artesanalmente.',
            'Então é isso. Se quiser conhecer outros trabalhos, não hesite em me procurar! Meu contato está na área «Quem é Mate Paiva?».',
        ];
        $scope.jobs = [{
            title: 'Desenvolvedor Angular Jr para <b>CTIS</b>',
            client: 'CTIS',
            description: 'Seguindo metodologia ágil e orientado pelas histórias de usuário, ajudo a desenvolver as telas do sistema. Como é um projeto interno, não posso divulgar nenhuma imagem deste trabalho. Além de fazer a integração com o backend e cuidar do design, desenvolvi também uma diretriz para melhorar a usabilidade do sistema. Eis a vantagem de ser um imigrante vindo dos mundos das humanas e do marketing - ter sensibilidade para enxergar o produto além do sistema, ou seja, enxergar como o usuário.',
            imgBaseurl: 'images/clients/ctis/',
            imgs: [{
                size: 1,
                src: 'secret-.jpg'
            }],
            date: {
                start: new Date(2016, 5),
                end: new Date()
            },
        }, {
            title: 'Web apps: desafios de matemática para <b>Obmep</b>',
            client: 'Curso Arquimedes',
            description: 'Desenvolver jogos de matemática interativos online, utilizando HTML5, Bootstrap, JavaScript, JSXGraph e MathJax. Recebo as atribuições do desafio e implemento, de modo que, sempre que o estudante jogar, um desafio com novos valores e variáveis esteja disponível para ele. Também deve-se fazer a correção dos resultados e mostrar o passo-a-passo na solução, de forma automatizada.',
            imgBaseurl: 'images/clients/obmep/',
            imgs: [{
                size: 2,
                src: 'img1.png'
            }, {
                size: 2,
                src: 'img2.png'
            }, {
                size: 2,
                src: 'img3.png'
            }, {
                size: 2,
                src: 'img4.png'
            }, {
                size: 2,
                src: 'img5.png'
            }, {
                size: 2,
                src: 'img6.png'
            }, {
                size: 2,
                src: 'img7.png'
            }],
            date: {
                start: new Date(2016, 2),
                end: new Date()
            },
        }, {
            title: 'Script <b>Smash</b>: Snippet Manager from Bash',
            client: 'Eu mesmo =]',
            description: 'É um programa linux que desenvolvi para evitar escrever a mesma coisa sempre e sempre. Assim, eu aciono um comando de teclado que, associado a uma palavra-chave que eu tiver acabado de escrever, transforma essa palavra-chave em um texto previamente salvo no meu computador. O legal é que é um programa completamente sem interface gráfica: pode-se interagir com ele enquanto usa outros programas. Desenvolvido em Bash.<br><br>Visite a <a href="https://github.com/matepaiva/smash-snippets" target="_blank">documentação no GitHub</a>.',
            imgBaseurl: 'images/clients/smash/',
            imgs: [{
                size: 2,
                src: 'img.gif'
            }],
            date: {
                start: new Date(2016, 2),
                end: new Date(2016, 2)
            },
        }, {
            title: 'Coming Soon Page para o restaurante <b>Ró Raw & Wine</b>',
            client: 'sahelizabeth.com',
            description: 'Criar página responsiva a partir do PSD do cliente.',
            imgBaseurl: 'images/clients/ro-raw/',
            imgs: [{
                size: 1,
                src: 'img.gif'
            }],
            date: {
                start: new Date(2016, 1),
                end: new Date(2016, 1)
            },
        }, {
            title: 'Month <b>Calendar</b> Generator API',
            client: 'Eu mesmo =]',
            description: 'Criei um módulo que instala uma folha de calendário para uma determinada data, com opções para marcar eventos. Totalmente estilizado por CSS. Feito em JavaScript puro. Desenvolvi para treinar - e também porque a maior parte dos módulos de calendário são em JQuery, Angular ou outro Framework, e eu queria um módulo puro.<br><br>Visite a <a href="https://github.com/matepaiva/month-calendar-generator" target="_blank">documentação no GitHub</a>.',
            imgBaseurl: 'images/clients/month-calendar/',
            imgs: [{
                size: 2,
                src: 'img.png'
            }],
            date: {
                start: new Date(2012, 1),
                end: new Date(2012, 1)
            },
        }, {
            title: 'Mate <b>Carousel</b> API',
            client: 'Eu mesmo =]',
            description: 'Módulo que transforma elementos de uma classe em slides e expõe uma API para controle. Feito em JavaScript Puro, pode ser usado como slide de imagens ou mesmo de uma seção completa de um aplicativo. É responsivo.<br><br>Visite a <a href="https://github.com/matepaiva/mateCarousel" target="_blank">documentação no GitHub</a>.',
            imgBaseurl: 'images/clients/carousel/',
            imgs: [{
                size: 2,
                src: 'img.png'
            }],
            date: {
                start: new Date(2012, 0),
                end: new Date(2012, 0)
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

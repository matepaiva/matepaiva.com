'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:DeveloperCtrl
 * @description
 * # DeveloperCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('JobCtrl', function ($scope, $routeParams, jobService, $location) {
        $scope.pageClass = 'page-job';
        $scope.jobService = jobService;
        $scope.jobIndex = $routeParams.job || 0;
        var type = ($location.$$path).substring(1);
        jobService.setJobs(type, $scope.jobIndex);
        $scope.$on('jobs:changed', function(event,data) {
            $scope.jobs = data.content;
            console.log(data);
        });
        $scope.$on('jobs:updated', function(event,data) {
            $scope.jobs = data.content;
            $scope.lastIndex = data.lastIndex;
        });
        $scope.$on('job:updated', function(event,data) {
            $scope.job = data;
            $scope.jobIndex = data.jobIndex || $scope.lastIndex || 0;
        });
        /**
         * FRASES DE DEVELOPER
         */
        // $scope.phrases = [
        //     'Vou mostrar pra você alguns trabalhos que fiz em Desenvolvimento Web. Vamos lá.',
        //     'Sou jornalista, mas me apaixonei por JavaScript no final de 2014. Desde então sigo estudando, autodidata, todos os dias!',
        //     'Dá um pulinho no meu <a href="https://github.com/matepaiva" target="_blank">Github</a> também! =]',
        //     'Este site que vos fala foi, ele mesmo, feito em <b>AngularJS</b>! Artesanalmente.',
        //     'Então é isso. Se quiser conhecer outros trabalhos, não hesite em me procurar! Meu contato está na área <a href="/#/quemsou#contact">Quem é Mate Paiva?</a>.',
        // ];

        /**
         * FRASES DE WRITER
         */
        // $scope.phrases = [
        //     'Estes são alguns dos trabalhos que já fiz com conteúdo digital. Vou te fazer companhia. Fica à vontade.',
        //     'Também já trabalhei com redação offline: desde revisão à criação de um livro completo como ghost writer!',
        //     'Mas minha maior experiência é nas mídias digitais. Desde 2009... puxa.',
        //     'Troco uns flertes com design, Inkscape, Gimp. Não é minha área, mas Social Media tem um pezinho nisso tudo, né?',
        //     'E escrevo poemas. Tenho inclusive alguns livretos impressos! Se quiser acompanhar meu trabalho é só curtir a fanpage <a href="http://fb.com/matetrotamundo" target="_blank">Mate Trotamundo</a> =]',
        //     'Em 2013 tirei um ano sabático e saí viajando de bicicleta entre MG, RJ e SP, divulgando meus livretos. Bicicleta, poesia e arte de rua, três paixões.',
        //     'Ops! Acabei esticando esse ano sabático. Em 2014 me envolvi com intervenções com Bolhas de Sabão Gigantes, já estacionado em SP.',
        //     'Em 2014, decidi também estudar programação. Pronto, mais uma paixão. Agora sou esse ser de humanas e exatas ao mesmo tempo. ',
        //     'Mas o que aspiro mesmo, mesmo, mesmo, é nunca parar de aprender. O maior presente que o jornalismo me deu foi a curiosidade.',
        //     'Então é isso. Se quiser conhecer outros trabalhos, não hesite em me procurar! Meu contato está na área « Quem é Mate Paiva? ».',
        // ];
        this.awesomeThings = [1,2,3];
    });

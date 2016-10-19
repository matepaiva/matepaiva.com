'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:WriterCtrl
 * @description
 * # WriterCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('WriterCtrl', function ($scope, $window, jobService) {
        jobService.getAllWithType('W')
            .then(function(response) {
                $scope.jobs = response.data;
                $scope.jobIndex = 0;
                $scope.job = $scope.jobs[$scope.jobIndex];
            })
            .catch(function(err) {
                console.log(err);
            })
        ;
        $scope.pageClass = 'page-writer';
        $scope.name = 'Social Media Content';
        $scope.phrases = [
            'Estes são alguns dos trabalhos que já fiz com conteúdo digital. Vou te fazer companhia. Fica à vontade.',
            'Também já trabalhei com redação offline: desde revisão à criação de um livro completo como ghost writer!',
            'Mas minha maior experiência é nas mídias digitais. Desde 2009... puxa.',
            'Troco uns flertes com design, Inkscape, Gimp. Não é minha área, mas Social Media tem um pezinho nisso tudo, né?',
            'E escrevo poemas. Tenho inclusive alguns livretos impressos! Se quiser acompanhar meu trabalho é só curtir a fanpage <a href="http://fb.com/matetrotamundo" target="_blank">Mate Trotamundo</a> =]',
            'Em 2013 tirei um ano sabático e saí viajando de bicicleta entre MG, RJ e SP, divulgando meus livretos. Bicicleta, poesia e arte de rua, três paixões.',
            'Ops! Acabei esticando esse ano sabático. Em 2014 me envolvi com intervenções com Bolhas de Sabão Gigantes, já estacionado em SP.',
            'Em 2014, decidi também estudar programação. Pronto, mais uma paixão. Agora sou esse ser de humanas e exatas ao mesmo tempo. ',
            'Mas o que aspiro mesmo, mesmo, mesmo, é nunca parar de aprender. O maior presente que o jornalismo me deu foi a curiosidade.',
            'Então é isso. Se quiser conhecer outros trabalhos, não hesite em me procurar! Meu contato está na área « Quem é Mate Paiva? ».',
        ];
        $scope.showThisJob = function (job) {
            $scope.jobIndex = job;
            $scope.job = $scope.jobs[job];
            $window.scrollTo(0, 0);
        };
        $scope.isDateNow = function (date) {
            if (date !== '0000-00-00') {return false;}
            return true;
        };
    });

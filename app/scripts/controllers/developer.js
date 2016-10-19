'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:DeveloperCtrl
 * @description
 * # DeveloperCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('DeveloperCtrl', function ($window, $scope, jobService) {
        jobService.getAllWithType('D')
            .then(function(response) {
                $scope.jobs = response.data;
                $scope.jobIndex = 0;
                $scope.job = $scope.jobs[$scope.jobIndex];
            })
            .catch(function(err) {
                console.log(err);
            })
        ;
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

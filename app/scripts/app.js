'use strict';

/**
 * @ngdoc overview
 * @name matepaivaApp
 * @description
 * # matepaivaApp
 *
 * Main module of the application.
 */
angular
    .module('matepaivaApp', [
        'ngAnimate',
        'ngCookies',
        'ngMessages',
        'ngResource',
        'ngRoute',
        'ngSanitize',
        'ngTouch',
        'ngLodash',
        'angularSpinner',
        'angular-loading-bar',
        'duScroll',
        'ngDragDrop',
        'pascalprecht.translate',
        'uiSwitch'
    ])
    .config(function ($routeProvider, $httpProvider, $locationProvider, $translateProvider) {
        $routeProvider
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'HomeCtrl',
            controllerAs: 'home'
        })
        .when('/about', {
            templateUrl: 'views/about.html',
            controller: 'AboutCtrl',
            controllerAs: 'aboutCtrl'
        })
        .when('/:career', {
            templateUrl: 'views/jobs.html',
            controller: 'JobCtrl',
            controllerAs: 'jobCtrl',
            reloadOnSearch: false
        })
        .otherwise({
            redirectTo: '/'
        });

        $httpProvider.interceptors.push('httpInterceptor');
        // use the HTML5 History API
        // $locationProvider.html5Mode(true);

        // Those urls are [prefix][langKey][suffix].
        $translateProvider.useStaticFilesLoader({
            prefix: 'i18n/',
            suffix: '.json'
        });
        $translateProvider.preferredLanguage('pt');
        $translateProvider.useLocalStorage();
    })
;

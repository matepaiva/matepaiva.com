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
        'duScroll'
    ])
    .config(function ($routeProvider, $httpProvider, $locationProvider) {
        $routeProvider
        .when('/', {
            templateUrl: 'views/home.html',
            controller: 'HomeCtrl',
            controllerAs: 'home'
        })
        .when('/quemsou', {
            templateUrl: 'views/quemsou.html',
            controller: 'QuemsouCtrl',
            controllerAs: 'quemsou'
        })
        .when('/:career', {
            templateUrl: 'views/job.html',
            controller: 'JobCtrl',
            controllerAs: 'jobCtrl',
            reloadOnSearch: false
        })
        .otherwise({
            redirectTo: '/'
        });

        $httpProvider.interceptors.push('httpInterceptor');
        // use the HTML5 History API
        $locationProvider.html5Mode(true);
    });

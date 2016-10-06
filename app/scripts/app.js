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
        'angular-loading-bar'
    ])
    .config(function ($routeProvider, $httpProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.html',
                controller: 'HomeCtrl',
                controllerAs: 'home'
            })
            .when('/developer', {
                templateUrl: 'views/developer.html',
                controller: 'DeveloperCtrl',
                controllerAs: 'developer'
            })
            .when('/writer', {
                templateUrl: 'views/writer.html',
                controller: 'WriterCtrl',
                controllerAs: 'writer'
            })
            .when('/quemsou', {
                templateUrl: 'views/quemsou.html',
                controller: 'QuemsouCtrl',
                controllerAs: 'quemsou'
            })
            .otherwise({
                redirectTo: '/'
            });

        $httpProvider.interceptors.push('httpInterceptor');
    });

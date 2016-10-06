'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:FooterCtrl
 * @description
 * # FooterCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
    .controller('FooterCtrl', function ($location) {
        this.$location = $location;
    });

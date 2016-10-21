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
        this.onDrop = function(event){
            var href = angular.element(event.target).find('a').prop('pathname');
            $location.path(href);
        };
    })
;

'use strict';

/**
 * @ngdoc service
 * @name matepaivaApp.jobservice
 * @description
 * # jobservice
 * Service in the matepaivaApp.
 */
angular.module('matepaivaApp')
    .service('jobService', function ($http, REST_API) {
        this.getAllWithType = function(type) {
            return $http.get(REST_API + '/jobs/' + type);
        };
        this.getOne = function(id) {
            return $http.get(REST_API + '/job/' + id);
        };
    })
;

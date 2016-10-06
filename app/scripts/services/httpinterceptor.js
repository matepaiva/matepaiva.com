'use strict';

/**
 * @ngdoc service
 * @name matepaivaApp.httpInterceptor
 * @description
 * # httpInterceptor
 * Factory in the matepaivaApp.
 */
angular.module('matepaivaApp')
    .factory('httpInterceptor', function ($rootScope, cfpLoadingBar) {
        function request(config) {
            //$rootScope.showSpinner = true;
            cfpLoadingBar.start();
            return config;
        }
        function requestError(rejection) {
            cfpLoadingBar.start();
            //$rootScope.showSpinner = true;
            return rejection;
        }
        function response(res) {
            cfpLoadingBar.complete();
            //$rootScope.showSpinner = false;
            return res;
        }
        function responseError(rejection) {
            cfpLoadingBar.complete();
            //$rootScope.showSpinner = false;
            return rejection;
        }

        return {
            request: request,
            requestError: requestError,
            response: response,
            responseError: responseError
        };
    });

'use strict';

/**
 * @ngdoc service
 * @name matepaivaApp.jobservice
 * @description
 * # jobservice
 * Service in the matepaivaApp.
 */
angular.module('matepaivaApp')
    .service('jobService', function ($http, REST_API, $location, $window, JOB, $rootScope) {
        var $this = this;
        var _jobs = {};
        var _job;
        this.setJobs = function(type, jobIndex) {
            var firstLetter = type.substring(0,1);
            $http.get(REST_API + '/jobs/' + firstLetter)
                .then(function(response) {
                    _jobs[type] = response.data;
                    $rootScope.$broadcast('jobs:updated', _jobs[type]);
                    $this.setJob(type, jobIndex);
                })
                .catch(function(err) {
                    console.log(err);
                })
            ;
        };
        this.getJobs = function(type) {
            return _jobs[type];
        };
        this.setJob = function(type, jobIndex) {
            _job = _jobs[type][jobIndex] || _jobs[type][0];
            _job.jobIndex = jobIndex;
            $rootScope.$broadcast('job:updated', _job);
        };
        this.getJob = function() {
            return _job;
        };
        this.showThisJob = function(jobIndex) {
            var type = ($location.$$path).substring(1);
            $location.search(JOB, jobIndex);
            $this.setJob(type, jobIndex);
            $window.scrollTo(0, 0);
        };
        this.isDateNow = function(date) {
            if (date !== '0000-00-00') { return false; }
            return true;
        };
    })
;

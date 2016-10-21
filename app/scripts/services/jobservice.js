'use strict';

/**
 * @ngdoc service
 * @name matepaivaApp.jobservice
 * @description
 * # jobservice
 * Service in the matepaivaApp.
 */
angular.module('matepaivaApp')
    .service('jobService', function ($http, REST_API, $location, $window, JOB, $rootScope, $timeout) {
        var $this = this;
        var _jobs = {};
        var _job;
        this.setJobs = function(type, jobIndex) {
            if (_jobs[type]) {
                $timeout(function() {
                    $rootScope.$broadcast('jobs:changed', _jobs[type]);
                    $this.showThisJob(jobIndex || _jobs[type].lastIndex);
                });
                return;
            }
            var firstLetter = type.substring(0,1);
            $http.get(REST_API + '/jobs/' + firstLetter)
                .then(function(response) {
                    _jobs[type] = {
                        content: response.data,
                        lastIndex: +jobIndex
                    };
                    $rootScope.$broadcast('jobs:updated', _jobs[type]);
                    $this.showThisJob(jobIndex || _jobs[type].lastIndex);
                })
                .catch(function(err) {
                    console.log(err);
                })
            ;
        };
        this.setJob = function(type, jobIndex) {
            var _jobIndex = +jobIndex;
            _jobs[type].lastIndex = _jobIndex;
            _job = _jobs[type].content[_jobIndex] || _jobs[type].content[0];
            _job.jobIndex = _jobIndex;
            $rootScope.$broadcast('job:updated', _job);
            $timeout(function() {
                var elements = document.getElementsByClassName('nav-jobs');
                for (var i=0; i < elements.length; i++) {
                    angular.element(elements[i]).scrollTo((229.16*jobIndex));
                }
            });
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

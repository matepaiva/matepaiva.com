'use strict';

/**
 * @ngdoc function
 * @name matepaivaApp.controller:HeaderCtrl
 * @description
 * # HeaderCtrl
 * Controller of the matepaivaApp
 */
angular.module('matepaivaApp')
  .controller('HeaderCtrl', function ($translate) {
    var $this = this;
    this.$translate = $translate;
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
    this.isEnglish = ($translate.proposedLanguage() || $translate.use()) === 'en';
    this.changeLanguage = function() {
        $this.isEnglish ? $translate.use('en') : $translate.use('pt');
    };
  });

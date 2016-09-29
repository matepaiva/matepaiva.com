'use strict';

describe('Controller: QuemsouCtrl', function () {

  // load the controller's module
  beforeEach(module('matepaivaApp'));

  var QuemsouCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    QuemsouCtrl = $controller('QuemsouCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(QuemsouCtrl.awesomeThings.length).toBe(3);
  });
});

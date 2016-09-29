'use strict';

describe('Controller: WriterCtrl', function () {

  // load the controller's module
  beforeEach(module('matepaivaApp'));

  var WriterCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    WriterCtrl = $controller('WriterCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(WriterCtrl.awesomeThings.length).toBe(3);
  });
});

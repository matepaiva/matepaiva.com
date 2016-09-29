angular.module("portfolio").controller("portfolioCtrl", function($scope, $timeout, $window) {
    $scope.name = "Geral";
    $scope.displayWelcomePage = {display: 'block'};
    $scope.panel = 'view/panelEmpty.html';

    $scope.test = function(text) {
        console.log(text);
    };
    $scope.setPanel = function(view){
        $scope.panel = view;
        $window.scrollTo(0, 0);
        if ($scope.displayWelcomePage.display === 'block') {
            $timeout(function(){
                $scope.displayWelcomePage.display = 'none';
            }, 900);
        }
    };


});

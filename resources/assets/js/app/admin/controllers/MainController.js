angular.module('Mth.Admin')
    .controller('MainController',['$scope', '$http' , '$state', 'CodeGroupService', function($scope, $http, $state, $code) {

        $code.getCodeGroupLists()
            .then(function(result) {
                $scope.codeGroups = result;
            }, function(reason) {

            });

        $scope.clickCodeGroup = function ($codeGroup) {
            console.log($codeGroup);
            $state.go('modify_code_group')
        };
    }]);
angular.module('Mth.Admin')
    .controller('MainController',['$scope', '$http' , '$state', 'CodeGroupService', function($scope, $http, $state, $code) {

        var main = this;

        // 프라미스를 이용한 코딩으로 중요
        $code.getCodeGroupLists()
            .then(function(result) {
                main.codeGroups = result;
            }, function(reason) {

            });

        $scope.clickCodeGroup = function ($codeGroup) {
            console.log($codeGroup);
            $state.go('modify_code_group')
        };
    }]);
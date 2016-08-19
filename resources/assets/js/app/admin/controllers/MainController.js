angular.module('Mth.Admin')
    .controller('MainController',['$scope', '$http' , '$state', function($scope, $http, $state) {

        $http.get("/api/mth-code-group")
            .then(
                function(response){
                    $scope.codeGroups = response.data;
                });

        $scope.clickCodeGroup = function ($codeGroup) {
            console.log($codeGroup);
            $state.go('modify_code_group')
        };
    }]);
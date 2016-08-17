/**
 * Created by hankwanghoon on 2016. 8. 14..
 */

var app = angular.module('adminApp', ['ngResource', 'ui.router']);

app.config(function($stateProvider) {
    $stateProvider
        .state('intro', {
            url: "",
            views: {
                "adminContent": { templateUrl: "/admin/view/intro" }
            }
        })
        .state('create_code_group', {
            url: "/create_code_group",
            views: {
                "adminContent": {templateUrl: "/admin/view/createCodeGroup"}
            }
        })
        .state('modify_code_group', {
            url: "/modify_code_group",
            views: {
                "adminContent": {templateUrl: "/admin/view/modifyCodeGroup"}
            }
        });
});

app.controller('adminController',['$scope', '$http' , '$state', function($scope, $http, $state) {

    $http.get("/mth-code-group")
        .then(
            function(response){
                $scope.codeGroups = response.data;
    });

    $scope.clickCodeGroup = function ($codeGroup) {
        console.log($codeGroup);
        $state.go('modify_code_group')
    };

}]);

//# sourceMappingURL=admin.js.map

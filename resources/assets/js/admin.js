/**
 * Created by hankwanghoon on 2016. 8. 14..
 */

var app = angular.module('adminApp', ['ngResource', 'ui.router', 'angular-ladda']);

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
                "adminContent": {
                    templateUrl: "/admin/view/createCodeGroup",
                    controller: "createCodeGroupController"
                }
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

app.controller('createCodeGroupController', ['$scope', '$timeout', function($scope, $timeout) {

    $scope.laddaControl = false;

    $scope.newCodeGroup = {group_id: '', group_name: ''};
    $scope.newCodes = [];

    $scope.saveCodeGroup = function() {
        $scope.laddaControl = true;
        console.log('save');
        $timeout(function() {
            $scope.laddaControl = false; // stop loading
        }, 2000);
        //clearForm();
    };

    $scope.addRow = function() {
        $scope.newCodes.push({chk: '', code_id: '', code_name: '', error: false, error_list: []});
    };

    $scope.selAllRow = function() {

        var i;

        for ( i  = $scope.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
            $scope.newCodes[i].chk = true;
        }
    };

    $scope.selNoRow = function() {
        var i;

        for ( i  = $scope.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
            $scope.newCodes[i].chk = false;
        }
    };

    $scope.deleteRow = function() {

        var i;

        for ( i  = $scope.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
            if ($scope.newCodes[i].chk === true) {
                $scope.newCodes.splice(i, 1);
            }
        }
    };

    function clearForm() {
        $scope.form1.$setPristine();
        $scope.form1.$setUntouched();
    }

}]);

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
/**
 * 서비스
 * module.value     : 런타임시에 변경되는 값 저장
 * module.constant  : 절대 변경이 없는 값 저장
 * module.service   : 서비스 객체 인스턴스 반환. 객체지향 스타일 프로그래밍
 * module.factory   : 서비스 객체 인스턴스 반환. 노출식 모듈 패턴
 * module.provider  : 서비스를 보다 세밀하게 정의. 복잡하며 장황. 애플리케이션 설정하는 동안 서비스의 동작 변경에 유용
 */

adminApp.service('CodeGroupService', function() {

    var service = this;

    service.getCodeGroupLists = function() {
        $http.get("/api/mth-code-group").then(

            function(result){
                return response.data;
            }),

            function(reason) {
                console.log(reason);
            }
    };

});
/**
 * Created by hankwanghoon on 2016. 8. 19..
 */

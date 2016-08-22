/**
 * Created by hankwanghoon on 2016. 8. 14..
 */

angular.module('Mth.Admin', ['ngResource', 'ui.router', 'angular-ladda', 'Mth.Utils']);

angular.module('Mth.Admin')
    .config(function($stateProvider) {
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
                        templateUrl: "/admin/view/code/createCodeGroup",
                        controller: "CreateCodeGroupController"
                    }
                }
            })
            .state('modify_code_group', {
                url: "/modify_code_group",
                views: {
                    "adminContent": {templateUrl: "/admin/view/code/modifyCodeGroup"}
                }
            });
        }
    );

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
angular.module('Mth.Admin')
    .controller('CreateCodeGroupController', ['$scope', '$timeout', function($scope, $timeout) {

        $scope.laddaControl = false;

        $scope.newCodeGroup = {group_id: '', group_name: ''};
        $scope.newCodes = [];

        $scope.saveCodeGroup = function() {
            $scope.laddaControl = true;
            console.log('save');
            $timeout(function() {
                $scope.laddaControl = false; // stop loading
            }, 2000);
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
angular.module('Mth.Admin')
    .service('CodeGroupService',[ '$http', function($http) {
        //가장 먼저 현재 객체에 대한 참조값을 저장 - 권장사항
        var service = this;

        service.getCodeGroupLists = function() {
            return $http.get("/api/mth-code-group")
                .then(
                    function(result){
                        return result.data;
                    }
                );
        };
    }]);
/**
 * Created by hankwanghoon on 2016. 8. 14..
 */
angular.module('Mth.Utils', []);
angular.module('Mth.Utils')
    .service('UtilsService', function() {

            var service = this;

            service.objectToArray = function(content) {

                if (content.data instanceof Object && !Array.isArray(content.data)) {
                    var newArray = [];

                    for (var key in content.data) {
                        var item = content.data[key];
                        item.id  = key;
                        newArray.push(item);
                    }
                    return newArray;

                } else {
                    return content.data;
                }
            };
        }
    );
(function() {

    'use strict';

    angular.module('Mth.Admin')
        .controller('MainController', MainController);

    MainController.$inject = ['$scope', '$http' , '$state', 'CodeGroupModel', 'toastr', 'MESSAGE_LIST'];

    function MainController($scope, $http, $state, $code, toastr, message_list) {
        var main = this;

        // 뷰에서 사용하는 변수
        main.clickCodeGroup = clickCodeGroup;
        main.codeGroups;

        //변수
        var messages = message_list;

        // 초기활성로직
        activate();

        // 함수선언부
        function activate () {
            loadCodeGroup();
        }

        function loadCodeGroup () {
            // 프라미스를 이용한 코딩으로 중요
            $code.getCodeGroupLists()
                .then(function(result) {
                    main.codeGroups = result;
                }, function(reason) {
                    toastr.error(messages[0].error1, 'Error');
                });
        }

        function clickCodeGroup ($codeGroup) {
            console.log($codeGroup);
            $state.go('modify_code_group')
        }
    }

})();


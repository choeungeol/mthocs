(function() {

    'use strict';

    angular
        .module('Mth.Admin')
        .controller('CreateCodeGroupController', CreateCodeGroupController);

    CreateCodeGroupController.$inject = ['$scope', '$timeout'];

    function CreateCodeGroupController($scope, $timeout) {
        // 초기변수
        var newCode = this;

        // 뷰에서 사용하는 변수
        newCode.addRow          = addRow;
        newCode.deleteRow       = deleteRow;
        newCode.laddaControl    = false;
        newCode.newCodes        = [];
        newCode.newCodeGroup    = {group_id: '', group_name: ''};
        newCode.saveCodeGroup   = saveCodeGroup;
        newCode.selAllRow       = selAllRow;
        newCode.selNoRow        = selNoRow;

        // 함수선언부
        function saveCodeGroup () {
            newCode.laddaControl = true;
            console.log('save');
            $timeout(function() {
                newCode.laddaControl = false; // stop loading
            }, 2000);
        }

        function addRow () {
            newCode.newCodes.push({chk: '', code_id: '', code_name: '', error: false, error_list: []});
        }

        function selAllRow () {

            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                newCode.newCodes[i].chk = true;
            }
        }

        function selNoRow () {
            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                newCode.newCodes[i].chk = false;
            }
        }

        function deleteRow () {

            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                if (newCode.newCodes[i].chk === true) {
                    newCode.newCodes.splice(i, 1);
                }
            }
        }

        function clearForm() {
            newCode.form1.$setPristine();
            newCode.form1.$setUntouched();
        }
    }

})();

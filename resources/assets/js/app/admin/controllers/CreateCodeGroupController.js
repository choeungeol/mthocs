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
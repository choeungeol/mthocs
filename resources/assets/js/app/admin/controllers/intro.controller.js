(function () {

    'use strict';

    angular
        .module('Mth.Admin')
        .controller('IntroController', IntroController);

    IntroController.$inject = ['$scope', '$timeout'];

    function IntroController($scope, $timeout) {
        // 초기변수
        var intro = this;
    }

})();

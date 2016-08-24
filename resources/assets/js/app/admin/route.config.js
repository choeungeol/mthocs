/**
 * Created by hankwanghoon on 2016. 8. 14..
 */
(function () {

    'use strict';

    angular.module('Mth.Admin')
        .config(config);

    function config($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/intro",
                        controller: "IntroController",
                        controllerAs: "intro"
                    }
                }
            })
            .state('create_code_group', {
                url: "/create_code_group",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/code/createCodeGroup",
                        controller: "CreateCodeGroupController",
                        controllerAs: "newCode"
                    }
                }
            })
            .state('modify_code_group', {
                url: "/modify_code_group",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/code/modifyCodeGroup",
                        controller: "ModifyCodeGroupController",
                        controllerAs: "modCode"
                    }
                }
            });
    }

})();


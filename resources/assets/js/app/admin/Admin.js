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

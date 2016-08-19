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

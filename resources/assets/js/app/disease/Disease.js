/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.Disease', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Disease')
    .config(function($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "diseaseContent": { templateUrl: "/disease/view/intro" }
                }
            });
        }
    );

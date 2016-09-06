/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.Healthcare', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Healthcare')
    .config(function($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "healthcareContent": { templateUrl: "/healthcare/view/intro" }
                }
            });
        }
    );

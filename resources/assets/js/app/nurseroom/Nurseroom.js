/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.Nurseroom', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Nurseroom')
    .config(function($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "nurseroomContent": { templateUrl: "/nurseroom/view/intro" }
                }
            });
        }
    );

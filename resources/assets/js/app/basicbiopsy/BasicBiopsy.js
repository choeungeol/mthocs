/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.BasicBiopsy', ['ngResource', 'ui.router', 'angular-ladda', 'Mth.Utils']);

angular.module('Mth.BasicBiopsy')
    .config(function($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "basicbiopsyContent": { templateUrl: "/basicbiopsy/view/intro" }
                }
            });
        }
    );

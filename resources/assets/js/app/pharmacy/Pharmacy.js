/**
 * Created by aqua on 2016. 8. 27..
 */

angular.module('Mth.Pharmacy', ['ngResource', 'ui.router', 'angular-ladda']);

angular.module('Mth.Pharmacy')
    .config(function($stateProvider) {
            $stateProvider
                .state('pharmacy', {
                    url: "",
                    views: {
                        "pharmacyContent": { templateUrl: "/pharmacy/view/intro" }
                    }
                });
        }
    );

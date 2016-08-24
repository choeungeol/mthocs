(function () {

    'use strict';

    angular.module('Mth.Utils')
        .service('UtilsService', UtilsService);

    function UtilsService() {

        var service = this;

        // 바인드변수
        service.objectToArray = objectToArray;

        function objectToArray(content) {

            if (content.data instanceof Object && !Array.isArray(content.data)) {
                var newArray = [];

                for (var key in content.data) {
                    var item = content.data[key];
                    item.id = key;
                    newArray.push(item);
                }
                return newArray;

            } else {
                return content.data;
            }
        };
    }

})();
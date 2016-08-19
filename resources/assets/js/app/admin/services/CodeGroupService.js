/**
 * 서비스
 * module.value     : 런타임시에 변경되는 값 저장
 * module.constant  : 절대 변경이 없는 값 저장
 * module.service   : 서비스 객체 인스턴스 반환. 객체지향 스타일 프로그래밍
 * module.factory   : 서비스 객체 인스턴스 반환. 노출식 모듈 패턴
 * module.provider  : 서비스를 보다 세밀하게 정의. 복잡하며 장황. 애플리케이션 설정하는 동안 서비스의 동작 변경에 유용
 */
angular.module('Mth.Admin')
    .service('CodeGroupService', function() {

        //가장 먼저 현재 객체에 대한 참조값을 저장 - 권장사항
        var service = this;

        service.getCodeGroupLists = function() {
            $http.get("/api/mth-code-group").then(

                function(result){
                    return result.data;
                }),

                function(reason) {
                    console.log(reason);
                }
        };

    });
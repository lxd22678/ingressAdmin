'use strict';

/* Controllers */
// signin controller
app.controller('SigninFormController', ['$scope', 'HttpService', '$state','$localStorage','toaster', function ($scope, HttpService, $state,$localStorage,toaster) {

    console.log("Enter into SignForm Controller");
    //清除本地信息
    $scope.app.user=null;
    $localStorage.user = null;

    $scope.user = {};
    $scope.login = function () {
        var url=$scope.app.host + '/user/index';
        var params={username: $scope.user.username,
            password: $scope.user.password,
            auto_login:$scope.user.auto_login};
        HttpService.post(url, params).then(
                function(response){
                    $scope.app.user = response;
                    //本地持久化
                    $localStorage.user = $scope.app.user;

                    $state.go('app.platform.index');
                }
            )
    };
}])
;
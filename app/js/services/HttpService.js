/**
 * Created by lishuang on 2015/7/12.
 */


//网络请求的一个统一的Service.
app.factory('HttpService', function ($http, $state, $q, toaster) {

    var service = {};
    service.post = function (url, params) {
        
        console.log(url+"?"+JSON.stringify(params));
        var request = {
            "head":{},
            "body":params
        };
        console.log(url+"?"+request);
        // 声明延后执行，表示要去监控后面的执行
        var deferred = $q.defer();
        $http.post(url, JSON.stringify(request))
            .success(function (response) {
                console.log(response);
                if (response.head.errCode == 0) {
                    deferred.resolve(response.body);
                } else {

                    toaster.pop("error", "错误", response.head.errMsg);


                    deferred.reject(errorMessage);
                }
            }).error(function (error) {

                var errorMessage = "请求出错：" + error;

                toaster.pop("error", "失败", errorMessage);

                deferred.reject(errorMessage);
            });

        return deferred.promise;
    };


    return service;
});
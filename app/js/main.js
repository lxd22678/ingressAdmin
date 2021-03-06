'use strict';

/* Controllers */

angular.module('app')
    .controller('AppCtrl', ['$scope', '$http', '$translate', '$localStorage', '$window','$state','toaster','HttpService',
        function ($scope, $http, $translate, $localStorage, $window,$state,toaster,HttpService) {
            // add 'ie' classes to html
            var isIE = !!navigator.userAgent.match(/MSIE/i);
            isIE && angular.element($window.document.body).addClass('ie');
            isSmartDevice($window) && angular.element($window.document.body).addClass('smart');



            // config
            $scope.app = {
                name: 'Ingress管理',
                organization:"Ingress",
                version: '1.0.0',
                host: "http://www.nadmin.com/index.php",
                // for chart colors
                color: {
                    primary: '#7266ba',
                    info: '#23b7e5',
                    success: '#27c24c',
                    warning: '#fad733',
                    danger: '#f05050',
                    light: '#e8eff0',
                    dark: '#3a3f51',
                    black: '#1c2b36'
                },

                /*
                 默认主题
                 navbarHeaderColor: 'bg-black',
                 navbarCollapseColor: 'bg-white-only',
                 asideColor: 'bg-black',
                 */
                /*
                 蓝色主题
                 navbarHeaderColor: 'bg-info dker',
                 navbarCollapseColor: 'bg-info dk',
                 asideColor: 'bg-black',
                 */
                settings: {
                    themeID: 1,
                    navbarHeaderColor: 'bg-info dker',
                    navbarCollapseColor: 'bg-info dk',
                    asideColor: 'bg-black',
                    headerFixed: true,
                    asideFixed: false,
                    asideFolded: false,
                    asideDock: false,
                    container: false
                }
            };

            // save settings to local storage
            if (angular.isDefined($localStorage.settings)) {
                $scope.app.settings = $localStorage.settings;
            } else {
                $localStorage.settings = $scope.app.settings;
            }
            $scope.$watch('app.settings', function () {
                if ($scope.app.settings.asideDock && $scope.app.settings.asideFixed) {
                    // aside dock and fixed must set the header fixed.
                    $scope.app.settings.headerFixed = true;
                }
                // save to local storage
                $localStorage.settings = $scope.app.settings;
            }, true);


            function isSmartDevice($window) {
                // Adapted from http://www.detectmobilebrowsers.com
                var ua = $window['navigator']['userAgent'] || $window['navigator']['vendor'] || $window['opera'];
                // Checks for iOs, Android, Blackberry, Opera Mini, and Windows mobile devices
                return (/iPhone|iPod|iPad|Silk|Android|BlackBerry|Opera Mini|IEMobile/).test(ua);
            }



            //用户身份从本地获取
            if (angular.isDefined($localStorage.user)) {
                $scope.app.user = $localStorage.user;
            }

            //当前图书馆从本地获取
            if (angular.isDefined($localStorage.library)) {
                $scope.app.library = $localStorage.library;
            }

        }]);

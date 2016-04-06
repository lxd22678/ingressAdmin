'use strict';

/**
 * Config for the router
 */
angular.module('app')
  .run(
    [          '$rootScope', '$state', '$stateParams',
      function ($rootScope,   $state,   $stateParams) {
          $rootScope.$state = $state;
          $rootScope.$stateParams = $stateParams;        
      }
    ]
  )
  .config(
    [          '$stateProvider', '$urlRouterProvider', 'JQ_CONFIG', 
      function ($stateProvider,   $urlRouterProvider, JQ_CONFIG) {
          
          $urlRouterProvider
              .otherwise('/app/platform/index');
          $stateProvider
              .state('app', {
                  abstract: true,
                  url: '/app',
                  templateUrl: 'page/tpl/app.html'
              })

              .state('app.platform',{
                  abstract:true,
                  url:'/platform',
                  template:'<div ui-view class="fade-in-up"></div>'
              })
              .state('app.platform.index',{
                  url:'/index',
                  templateUrl:'page/platform/index.html'
              })
              
              .state('app.portal',{
                  abstract:true,
                  url:'/portal',
                  template:'<div ui-view class="fade-in-up"></div>'
              })
              .state('app.portal.list',{
                  url:'/list',
                  templateUrl:'page/portal/list.html'
              })
              .state('app.portal.detail',{
                  url:'/detail/{no}/{editMode}',
                  templateUrl:'page/portal/detail.html'
              })

              .state('app.user', {
                  abstract: true,
                  url: '/user',
                  template: '<div ui-view class="fade-in-up"></div>'
              })
              .state('app.user.list', {
                  url: '/list',
                  templateUrl: 'page/user/list.html'
              })
              .state('app.user.edit', {
                  url: '/edit/{userId}',
                  templateUrl: 'page/user/edit.html'
              })


              .state('access', {
                  abstract: true,
                  url: '/access',
                  templateUrl: 'page/tpl/access.html'
              })
              .state('access.signin', {
                  url: '/signin',
                  templateUrl: 'page/signin.html',
                  resolve: {
                      deps: ['uiLoad',
                          function( uiLoad ){
                              return uiLoad.load( ['js/controllers/signin.js'] );
                          }]
                  }
              })
              .state('access.signup', {
                  url: '/signup',
                  templateUrl: 'page/signup.html',
                  resolve: {
                      deps: ['uiLoad',
                          function( uiLoad ){
                              return uiLoad.load( ['js/controllers/signup.js'] );
                          }]
                  }
              })
              .state('access.forgotpwd', {
                  url: '/forgotpwd',
                  templateUrl: 'page/forgotpwd.html'
              })
              .state('access.404', {
                  url: '/404',
                  templateUrl: 'page/404.html'
              })

      }
    ]
  );

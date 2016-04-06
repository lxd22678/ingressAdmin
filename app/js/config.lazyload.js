// lazyload config

angular.module('app')
    /**
   * jQuery plugin config use ui-jq directive , config the js and css files that required
   * key: function name of the jQuery plugin
   * value: array of the css js file located
   */
  .constant('JQ_CONFIG', {
      easyPieChart:   [   '../fork/angulr-2.0.1/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.fill.js'],
      sparkline:      [   '../fork/angulr-2.0.1/bower_components/jquery.sparkline/dist/jquery.sparkline.retina.js'],
      plot:           [   '../fork/angulr-2.0.1/bower_components/flot/jquery.flot.js',
                          '../fork/angulr-2.0.1/bower_components/flot/jquery.flot.pie.js', 
                          '../fork/angulr-2.0.1/bower_components/flot/jquery.flot.resize.js',
                          '../fork/angulr-2.0.1/bower_components/flot.tooltip/js/jquery.flot.tooltip.js',
                          '../fork/angulr-2.0.1/bower_components/flot.orderbars/js/jquery.flot.orderBars.js',
                          '../fork/angulr-2.0.1/bower_components/flot-spline/js/jquery.flot.spline.js'],
      moment:         [   '../fork/angulr-2.0.1/bower_components/moment/moment.js'],
        //这个地方的路径有点儿诡异。 ./ 因为用到screenfull的文件算是index.html了。
      screenfull:     [   './fork/angulr-2.0.1/bower_components/screenfull/dist/screenfull.min.js'],
      slimScroll:     [   '../fork/angulr-2.0.1/bower_components/slimscroll/jquery.slimscroll.min.js'],
      sortable:       [   '../fork/angulr-2.0.1/bower_components/html5sortable/jquery.sortable.js'],
      nestable:       [   '../fork/angulr-2.0.1/bower_components/nestable/jquery.nestable.js',
                          '../fork/angulr-2.0.1/bower_components/nestable/jquery.nestable.css'],
      filestyle:      [   '../fork/angulr-2.0.1/bower_components/bootstrap-filestyle/src/bootstrap-filestyle.js'],
      slider:         [   '../fork/angulr-2.0.1/bower_components/bootstrap-slider/bootstrap-slider.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-slider/bootstrap-slider.css'],
      chosen:         [   '../fork/angulr-2.0.1/bower_components/chosen/chosen.jquery.min.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-chosen/bootstrap-chosen.css'],
      TouchSpin:      [   '../fork/angulr-2.0.1/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css'],
      wysiwyg:        [   '../fork/angulr-2.0.1/bower_components/bootstrap-wysiwyg/bootstrap-wysiwyg.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-wysiwyg/external/jquery.hotkeys.js'],
      dataTable:      [   '../fork/angulr-2.0.1/bower_components/datatables/media/js/jquery.dataTables.min.js',
                          '../fork/angulr-2.0.1/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.js',
                          '../fork/angulr-2.0.1/bower_components/plugins/integration/bootstrap/3/dataTables.bootstrap.css'],
      vectorMap:      [   '../fork/angulr-2.0.1/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js', 
                          '../fork/angulr-2.0.1/bower_components/bower-jvectormap/jquery-jvectormap-world-mill-en.js',
                          '../fork/angulr-2.0.1/bower_components/bower-jvectormap/jquery-jvectormap-us-aea-en.js',
                          '../fork/angulr-2.0.1/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css'],
      footable:       [   '../fork/angulr-2.0.1/bower_components/footable/dist/footable.all.min.js',
                          '../fork/angulr-2.0.1/bower_components/footable/css/footable.core.css'],
      fullcalendar:   [   '../fork/angulr-2.0.1/bower_components/moment/moment.js',
                          '../fork/angulr-2.0.1/bower_components/fullcalendar/dist/fullcalendar.min.js',
                          '../fork/angulr-2.0.1/bower_components/fullcalendar/dist/fullcalendar.css',
                          '../fork/angulr-2.0.1/bower_components/fullcalendar/dist/fullcalendar.theme.css'],
      daterangepicker:[   '../fork/angulr-2.0.1/bower_components/moment/moment.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-daterangepicker/daterangepicker.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-daterangepicker/daterangepicker-bs3.css'],
      tagsinput:      [   '../fork/angulr-2.0.1/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js',
                          '../fork/angulr-2.0.1/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css']
                      
    }
  )
  // oclazyload config
  .config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
      // We configure ocLazyLoad to use the lib script.js as the async loader
      $ocLazyLoadProvider.config({
          debug:  true,
          events: true,
          modules: [
              {
                  name: 'ngGrid',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/ng-grid/build/ng-grid.min.js',
                      '../fork/angulr-2.0.1/bower_components/ng-grid/ng-grid.min.css',
                      '../fork/angulr-2.0.1/bower_components/ng-grid/ng-grid.bootstrap.css'
                  ]
              },
              {
                  name: 'ui.grid',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angular-ui-grid/ui-grid.min.js',
                      '../fork/angulr-2.0.1/bower_components/angular-ui-grid/ui-grid.min.css',
                      '../fork/angulr-2.0.1/bower_components/angular-ui-grid/ui-grid.bootstrap.css'
                  ]
              },
              {
                  name: 'ui.select',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angular-ui-select/dist/select.min.js',
                      '../fork/angulr-2.0.1/bower_components/angular-ui-select/dist/select.min.css'
                  ]
              },
              {
                  name:'angularFileUpload',
                  files: [
                    '../fork/angulr-2.0.1/bower_components/angular-file-upload/angular-file-upload.min.js'
                  ]
              },
              {
                  name:'ui.calendar',
                  files: ['../fork/angulr-2.0.1/bower_components/angular-ui-calendar/src/calendar.js']
              },
              {
                  name: 'ngImgCrop',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/ngImgCrop/compile/minified/ng-img-crop.js',
                      '../fork/angulr-2.0.1/bower_components/ngImgCrop/compile/minified/ng-img-crop.css'
                  ]
              },
              {
                  name: 'angularBootstrapNavTree',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angular-bootstrap-nav-tree/dist/abn_tree_directive.js',
                      '../fork/angulr-2.0.1/bower_components/angular-bootstrap-nav-tree/dist/abn_tree.css'
                  ]
              },
              {
                  name: 'toaster',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angularjs-toaster/toaster.js',
                      '../fork/angulr-2.0.1/bower_components/angularjs-toaster/toaster.css'
                  ]
              },
              {
                  name: 'textAngular',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/textAngular/dist/textAngular-sanitize.min.js',
                      '../fork/angulr-2.0.1/bower_components/textAngular/dist/textAngular.min.js'
                  ]
              },
              {
                  name: 'vr.directives.slider',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/venturocket-angular-slider/build/angular-slider.min.js',
                      '../fork/angulr-2.0.1/bower_components/venturocket-angular-slider/build/angular-slider.css'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular/videogular.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.controls',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular-controls/controls.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.buffering',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular-buffering/buffering.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.overlayplay',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular-overlay-play/overlay-play.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.poster',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular-poster/poster.min.js'
                  ]
              },
              {
                  name: 'com.2fdevs.videogular.plugins.imaads',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/videogular-ima-ads/ima-ads.min.js'
                  ]
              },
              {
                  name: 'xeditable',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angular-xeditable/dist/js/xeditable.min.js',
                      '../fork/angulr-2.0.1/bower_components/angular-xeditable/dist/css/xeditable.css'
                  ]
              },
              {
                  name: 'smart-table',
                  files: [
                      '../fork/angulr-2.0.1/bower_components/angular-smart-table/dist/smart-table.min.js'
                  ]
              }
          ]
      });
  }])
;

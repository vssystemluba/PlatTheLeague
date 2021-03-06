// Karma configuration
// http://karma-runner.github.io/0.10/config/configuration-file.html

module.exports = function(config) {
  config.set({
    // base path, that will be used to resolve files and exclude
    basePath: '../..',

    // testing framework to use (jasmine/mocha/qunit/...)
    frameworks: ['jasmine'],

    // list of files / patterns to load in the browser
    files: [
		'app/components/jquery/dist/jquery.js',
		'app/components/jquery-ui/ui/minified/jquery-ui.min.js',
		'app/components/angular/angular.min.js',
		'app/components/angular-route/angular-route.js',
		'app/components/angular-bootstrap/ui-bootstrap-tpls.js',
		'app/components/angular-dragdrop/src/angular-dragdrop.js',
		'app/components/highcharts-ng/src/highcharts-ng.js',
		'app/components/highcharts.com/js/highcharts.src.js',
		'app/components/angular-timer/app/js/timer.js',
		'app/components/angular-mocks/angular-mocks.js',
		'app/scripts/app.js',
		'app/scripts/controllers/teamBuilderCtrl.js',
		'app/scripts/controllers/modalInstanceCtrl.js',
		'app/scripts/services/factories.js',
		'app/scripts/filters/filters.js',
		'test/unit/*.js'
    ],

    // list of files / patterns to exclude
    exclude: [],

    // web server port
    port: 9999,

    // level of logging
    // possible values: LOG_DISABLE || LOG_ERROR || LOG_WARN || LOG_INFO || LOG_DEBUG
    logLevel: config.LOG_INFO,
    colors: true,

    // If browser does not capture in a given timeout [ms], kill it
    captureTimeout: 5000,

    // Start these browsers, currently available:
    // - Chrome
    // - ChromeCanary
    // - Firefox
    // - Opera
    // - Safari (only Mac)
    // - PhantomJS
    // - IE (only Windows)
    browsers: ['Chrome'
    			]


    // Continuous Integration mode
    // if true, it capture browsers, run tests and exit
  });
};

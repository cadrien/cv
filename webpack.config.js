var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .addEntry('vertical-timeline-reset', './assets/vertical-timeline-master/css/reset.css')
    .addEntry('vertical-timeline-style', './assets/vertical-timeline-master/css/style.css')
    .addEntry('vertical-timeline-js', './assets/vertical-timeline-master/js/main.js')
    .addEntry('fa', './vendor/fortawesome/font-awesome/css/font-awesome.css')
    .addEntry('bootstrap', './vendor/twbs/bootstrap/dist/css/bootstrap.css')
    .addEntry('jquery.min', './vendor/components/jquery/jquery.min.js')
    .addEntry('popper.min', './vendor/twbs/bootstrap/assets/js/vendor/popper.min.js')
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
;

module.exports = Encore.getWebpackConfig();

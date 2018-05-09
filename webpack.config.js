var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')
    .addEntry('bootstrap.css', './vendor/twbs/bootstrap/dist/css/bootstrap.css')
    .addEntry('popper.min.js', './vendor/twbs/bootstrap/assets/js/vendor/popper.min.js')
    //.addEntry('bootstrap.js', './vendor/twbs/bootstrap/dist/js/bootstrap.js')
    .autoProvidejQuery()
    .enableSourceMaps(!Encore.isProduction())
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
;

module.exports = Encore.getWebpackConfig();

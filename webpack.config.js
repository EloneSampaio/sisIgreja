// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './public/js/app.js')
    .createSharedEntry('login', ['./public/css/main.css','./public/css/font-awesome.css'])


    .enableSourceMaps(!Encore.isProduction())
    .enableSassLoader()
    .cleanupOutputBeforeBuild();


module.exports = Encore.getWebpackConfig();


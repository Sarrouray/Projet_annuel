// webpack.config.js

const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .addEntry('app', './assets/app.js')
    .enableSingleRuntimeChunk()
    .splitEntryChunks();

module.exports = Encore.getWebpackConfig();

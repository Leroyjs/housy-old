const mix = require('laravel-mix');
const path = require('path');
const glob = require("glob");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    // .postCss('resources/css/app.css', 'public/css', [])
    .version()
    // .copyDirectory('resources/img', 'public/images')
    .alias({
        '@': './resources/js',
        '~': './resources/scss',
    })
    .browserSync({
        proxy: 'localhost:8000',
        open: false,
    });


(function getEntryJs() {
    glob.sync('resources/views/**/index.js')
        .forEach((file) => {
            const name = file.match(/\/views\/(.+)\/index.js/)[1];
            const inputPath = path.resolve('resources/views/', name, 'index.js');
            const outputPath = path.resolve('public/', name);

            const inputPathCss = path.resolve('resources/views/', name, 'index.scss');
            const outputPathCss = path.resolve('public/', name, 'index.css');

            mix.js(inputPath, outputPath);
            mix.sass(inputPathCss, outputPathCss);
        });
})()

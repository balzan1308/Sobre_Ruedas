const mix = require('laravel-mix');
const Mix = require('laravel-mix/src/Mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.sass('resources/sass/app.scss', 'public/css');


    mix.js([
        'public/store/js/bootstrap.min.js',
        'public/store/js/jquery.min.js',
        'public/store/js/jquery.zoom.min.js',
        'public/store/js/main.js',
        'public/store/js/nouislider.min.js',
        'public/store/js/slick.min.js',
    ], 'public/store/js/all.js');

    mix.styles([
        'public/store/css/bootstrap.min.css',
        'public/store/css/font-awesome.min.css',
        'public/store/css/nouislider.min.css',
        'public/store/css/slick.css',
        'public/store/css/slick-theme.css',
        'public/store/css/style.css',
    ], 'public/store/css/all.css');
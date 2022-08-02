const mix = require('laravel-mix');
require('core-js');
require('laravel-mix-polyfill');

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

mix.js('js/main.js', 'js/built.js')
    .sass('scss/main.scss', 'css/main.css')
    .polyfill({
        enabled: true,
        useBuiltIns: 'entry',
        targets: false,
        entryPoints: "stable",
        corejs: 3,
    })
    .minify('js/built.js', 'js/built.min.js')
    .minify('css/main.css', 'css/main.min.css');

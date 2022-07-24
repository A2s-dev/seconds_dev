const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js').vue({version: 2})
    .js('resources/js/all.js', 'public/js')
    .js('resources/js/EditerLock.js', 'public/js')
    .js('resources/js/DisableEnter.js', 'public/js')
    .js('resources/js/NavClose.js', 'public/js')
    .js('resources/js/NavOpen.js', 'public/js')
    .js('resources/js/NavStyle.js', 'public/js')
    .js('resources/js/Tooltips.js', 'public/js')
    .js('resources/js/StrCount.js', 'public/js')
    .js('resources/js/Loader.js', 'public/js')
    .js('resources/js/Geometry.js', 'public/js')
    .js('resources/js/Direction.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').options({
        processCssUrls: false
    });
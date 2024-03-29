const mix = require('laravel-mix');

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
    /* CSS */
    .sass('resources/sass/main.scss', 'public/css/dashmix.css')
    .sass('resources/sass/dashmix/themes/xeco.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xinspire.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xmodern.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xsmooth.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xwork.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xdream.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xpro.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xplay.scss', 'public/css/themes/')

    /* JS */
    .js('resources/js/app.js', 'public/js/laravel.app.js').vue()
    .js('resources/js/header/header.js', 'public/js/laravel.header.js').vue()
    .js('resources/js/dashmix/app.js', 'public/js/dashmix.app.js').vue()
    .js('resources/js/dashmix/chart.js', 'public/js/chart.app.js').vue()
    .js('resources/js/dashmix/textFit.js', 'public/js/textFit.app.js').vue()
    .js('resources/js/dashmix/pages/be_tables_datatables.js', 'public/js/dataTables.app.js').vue()

    /* Page JS */
    .js('resources/js/pages/tables_datatables.js', 'public/js/pages/tables_datatables.js').vue()

    /* Tools */
    .browserSync('127.0.0.1:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });

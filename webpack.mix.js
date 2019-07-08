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

mix.js('resources/js/app.js', 'public/js')
    // .js('resources/js/scripts.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
    //.sass('resources/sass/layout/header.scss', 'public/css')
    // .sass('resources/sass/pages/homepage.scss', 'public/css')
    // .sass('resources/sass/pages/test.scss', 'public/css')
    //.sass('resources/sass/layout/footer.scss', 'public/css');

mix.copy('resources/images/banner.jpg', 'public/images/banner.jpg');
mix.copy('resources/images/Layer_7_copy_2.svg', 'public/images/Layer_7_copy_2.svg');

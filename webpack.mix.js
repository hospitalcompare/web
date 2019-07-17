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
    .sass('resources/sass/app.scss', 'public/css');

//Copy all the images that are used on the Web Application to the right folder ( public/images )
mix.copy('resources/images/banner.jpg', 'public/images/banner.jpg');
mix.copy('resources/images/Layer_7_copy_2.svg', 'public/images/Layer_7_copy_2.svg');
mix.copy('resources/images/placeholder.jpg', 'public/images/placeholder.jpg');
mix.copy('resources/images/player_button.png', 'public/images/player_button.png');
mix.copy('resources/images/alder-1.png', 'public/images/alder-1.png');
const mix = require('laravel-mix');
const webpack = require('webpack');
let productionSourceMaps = false;

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

mix.webpackConfig({
    devtool: "source-map",
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery",
            Cookies: "js-cookie",
            Popper: "popper"
        })
    ],
});

//Copy all the images that are used on the Web Application to the right folder ( public/images )
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/video', 'public/video');
mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/downloads', 'public/downloads');
mix.copy('node_modules/stickybits/dist/stickybits.min.js', 'public/js/stickybits.js');

mix.options({
    autoprefixer: false,
    postCss: [
        require('autoprefixer')({
            remove: false,
            // browsers: ['last 2 version', 'safari 5', 'ie 6', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'ios 7', 'ios 8', 'ios 9', 'android 4'],
        }),
        require('postcss-flexbugs-fixes')(),
    ],
    processCssUrls: false
})
    .sass('resources/sass/app.scss', 'public/css')
    .react(['resources/js/index.js'], 'public/js')
    .sourceMaps(productionSourceMaps,"source-map")
    .version();


// Reload browser when something changes
mix.browserSync({
    injectChanges: true,
    files: [
        'resources/sass/**/*.scss',
        'resources/js/**/*.js',
        'resources/views/**/*.blade.php',
        'public/images/**/*'
    ],
    logSnippet: true,
    proxy: process.env.APP_URL,
    port: 8080,
    ghostMode: false
})
    //Disable notification sounds
    .disableSuccessNotifications();

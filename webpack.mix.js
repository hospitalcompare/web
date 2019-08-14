const mix = require('laravel-mix');
const pathRes = require('path');
const webpack = require('webpack');

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

//Copy all the images that are used on the Web Application to the right folder ( public/images )
mix.copyDirectory('resources/images', 'public/images');
mix.copyDirectory('resources/video', 'public/video');

mix.webpackConfig({
    devtool: "inline-source-map",
    plugins: [
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery: "jquery"
        })
    ]
});

// Add prefixes to css rules and fix bugs with flexbox
mix.sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .options({
        autoprefixer: false,
        postCss: [
            require('autoprefixer')({
                remove: false,
                // browsers: ['last 2 version', 'safari 5', 'ie 6', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'ios 7', 'ios 8', 'ios 9', 'android 4'],
            }),
            require('postcss-flexbugs-fixes')(),
        ],
        processCssUrls: false
    });

mix.js(['resources/js/app.js'], 'public/js');
// mix.copy('resources/js/cookies.js', 'public/js');
// mix.js(['resources/js/cookies.js'], 'public/js');

// Reload browser when something changes
mix.browserSync({
    injectChanges: true,
    files: [
        'resources/sass/**/*.scss',
        'resources/js/**/*.js',
        'resources/views/**/*.blade.php'
    ],
    logSnippet: true,
    proxy: process.env.APP_URL,
    port: 8080
});

// Disable notification sounds
mix.disableSuccessNotifications();

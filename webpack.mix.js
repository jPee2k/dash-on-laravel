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

mix.js('resources/js/app.js', 'public/dist/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/dist/css');

// site
mix.styles([
    'resources/css/site/cssLibs8832.css',
    'resources/css/site/bundle8832.css',
], 'public/dist/css/site.css');
mix.scripts([
    'resources/js/site/libs8832.js',
    'resources/js/site/script8832.js',
], 'public/dist/js/site.js')

// dash
mix.styles([
    'resources/css/dash/vendor.styles.css',
    'resources/css/dash/light-template.css',
], 'public/dist/css/dash.css');
mix.scripts([
    'resources/js/dash/vendor-override/chartjs-doughnut.js',
    'resources/js/dash/vendor-override/tooltip.js',
    'resources/js/dash/common-msb.js',
    'resources/js/dash/dashboard-msb.js',
    'resources/js/dash/vendor.base.js',
    'resources/js/dash/vendor.bundle.js',
], 'public/dist/js/dash.js');
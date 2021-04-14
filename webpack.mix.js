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
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

// dash
mix.styles([
    'resources/css/dash/vendor.styles.css',
    'resources/css/dash/light-template.css',
    'resources/css/dash/styles.css',
], 'public/css/dash.css');
mix.scripts([
    'resources/js/dash/vendor.base.js',
    'resources/js/dash/vendor.bundle.js',
    'resources/js/dash/common-msb.js',
    'resources/js/dash/vendor-override/tooltip.js',
    // 'resources/js/dash/components/sweet-alert.js',
    'resources/js/dash/scripts.js',
], 'public/js/dash.js');
mix.copy('resources/fonts', 'public/fonts');
mix.copy('resources/img', 'public/img');
// summernote - fonts
mix.copy('resources/css/dash/font', 'public/css/font');

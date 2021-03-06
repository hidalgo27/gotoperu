const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/admin.scss', 'public/css/admin')
    .sass('resources/assets/sass/fonts-awesome/font-awesome.scss', 'public/css/');

//---js copy
mix.copy('node_modules/sticky-kit/dist/sticky-kit.js', 'resources/assets/js/vendors/sticky-kit.js');
//---js admin
mix.scripts([
    'resources/assets/js/vendors/jquery-ui.js',
    'resources/assets/js/vendors/sticky-kit.js',
    'resources/assets/js/vendors/owl.carousel.js',
    'resources/assets/js/vendors/video.js',
    'resources/assets/js/vendors/responsiveslides.js',
    //Customized
    'resources/assets/js/vendors/function-admin.js',
    'resources/assets/js/vendors/function.js',
], 'public/js/admin/plugins.js');

//---js web

if (mix.config.inProduction) {
    mix.version();
}
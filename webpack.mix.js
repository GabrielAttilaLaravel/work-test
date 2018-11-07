let mix = require('laravel-mix');

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
mix.js('resources/assets/js/show-img-input-file.js', 'public/js')
    .js('resources/assets/js/googlemaps.js', 'public/js')
    .sass('resources/assets/sass/perfil.scss', 'public/css')
    .sass('resources/assets/sass/company.scss', 'public/css');

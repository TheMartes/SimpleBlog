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
// JS
mix.js('resources/assets/js/app.js', 'public/js/app.js');

// SASS
mix.sass('resources/assets/sass/style.sass', 'public/css/style.css')
   .sass('resources/assets/sass/admin/style.sass', 'public/css/admin/style.css');

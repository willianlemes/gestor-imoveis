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



mix.scripts(['node_modules/jquery/dist/jquery.js',
    'node_modules/jquery-mask-plugin/dist/jquery.mask.js'],
    'public/site/js/jquery.js').version();
mix.scripts('resources/js/busca-cep.js', 'public/site/js/busca-cep.js').version();
mix.scripts('node_modules/materialize-css/dist/js/materialize.js', 'public/site/js/materialize.js').version();
mix.styles('node_modules/materialize-css/dist/css/materialize.css', 'public/site/css/materialize.css').version();

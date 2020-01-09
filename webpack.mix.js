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

 mix.styles(['node_modules/bootstrap/dist/css/bootstrap.css',
             'resources/css/style.css'],
             'public/site/css/style.css').version();

mix.scripts(['node_modules/jquery/dist/jquery.js',
             'node_modules/jquery-mask-plugin/dist/jquery.mask.js',
             'node_modules/moment/moment.js',
             'node_modules/bootstrap/dist/js/bootstrap.js',
             'resources/js/busca-cep.js'],
             'public/site/js/script.js').version();

//FullCalendar
mix.styles(['node_modules/@fullcalendar/core/main.css',
            'node_modules/@fullcalendar/daygrid/main.css',
            'node_modules/@fullcalendar/timegrid/main.css',
            'node_modules/@fullcalendar/list/main.css'],
            'public/site/css/fullcalendar.css').version();

mix.scripts(['node_modules/@fullcalendar/core/main.js',
             'node_modules/@fullcalendar/interaction/main.js',
             'node_modules/@fullcalendar/daygrid/main.js',
             'node_modules/@fullcalendar/timegrid/main.js',
             'node_modules/@fullcalendar/list/main.js',
             'node_modules/@fullcalendar/core/locales/pt-br.js'
           ],
             'public/site/js/fullcalendar.js').version();

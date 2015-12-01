var elixir = require('laravel-elixir');

var node_modules = '../../../node_modules';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .sass('admin.scss')
        .scripts([
            node_modules + '/jquery/dist/jquery.min.js',
            node_modules + '/foundation-sites/dist/foundation.js'
        ])
        .browserSync({
            proxy: 'acgj.dev'
        });
});

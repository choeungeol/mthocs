var elixir      = require('laravel-elixir');

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
    //Clean UI 이동
    mix.copy('resources/vendor/cleanui/build/assets', 'public/vendor/assets');

    mix.scripts(
        [
            'admin.js'
        ], 'public/js/admin.js'
    ).browserSync({proxy: 'mthocsemr.app'});
});

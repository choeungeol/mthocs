var elixir = require('laravel-elixir');

//소스매핑파일을 만들지 않는다
elixir.config.sourcemaps = false;

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

elixir(function (mix) {


    // CSS파일 이동
    mix.copy('resources/vendor/cleanui/build/assets', 'public/vendor/assets');

    mix.scripts(
        [
            'app/admin/admin.js',
            'app/admin/admin_controller.js',
            'app/admin/admin_service.js',
            'app/admin/admin_directive.js'
        ], 'public/js/admin.js'
    ).browserSync({proxy: 'mthocsemr.app'});
});

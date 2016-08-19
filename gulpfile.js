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

    mix.copy('resources/vendor/cleanui/build/assets', 'public/vendor/assets');

    mix.scripts(
        [
            'app/admin/Admin.js',
            'app/admin/controllers/MainController.js',
            'app/admin/controllers/CreateCodeGroupController.js',
            'app/admin/models/CodeGroupModel.js',
            'app/util/Utils.js',
            'app/util/services/ArrayUtilService.js',
        ], 'public/js/Admin.js'
    ).browserSync({proxy: 'mthocsemr.app'});
});

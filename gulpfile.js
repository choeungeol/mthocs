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
            'app/admin/admin.module.js',
            'app/admin/route.config.js',
            'app/admin/services/exception.service.js',
            'app/admin/services/message.service.js',
            'app/admin/controllers/main.controller.js',
            'app/admin/controllers/createCodeGroup.controller.js',
            'app/admin/controllers/modifyCodeGroup.controller.js',
            'app/admin/controllers/intro.controller.js',
            'app/admin/models/codeGroup.model.js',
            'app/util/utils.module.js',
            'app/util/services/arrayUtil.service.js',
        ]
        , 'public/js/admin.js'
    ).browserSync({proxy: 'mthocsemr.app'});
});

var elixir = require('laravel-elixir');

require('laravel-elixir-vueify'); 
require ("jquery")
require('laravel-elixir-vue-2');
elixir(function(mix) {
    mix.browserify('app.js')
            .browserify("admin.js");
});
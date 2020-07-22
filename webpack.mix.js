let mix = require(__dirname + '/node_modules/laravel-mix/src/index');
let webpack = require('webpack');

let directory_asset = 'public';
mix.setPublicPath(path.normalize(directory_asset));


let build_js = [{
    from: 'resources/js/app.js',
    to: 'js/app.js'
}, ];


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

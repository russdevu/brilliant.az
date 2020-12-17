const mix = require('laravel-mix');

/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel applications. By default, we are compiling the CSS
| file for the application as well as bundling up all the JS files.
|
*/

mix
    .js('resources/js/app.js', 'public/js')
        .js('resources/js/main/main.js', 'public/js')
	.sass('resources/scss/main.scss', 'public/css/style.css')
    // .browserSync({
    //     proxy: 'brilliant.az',
    //     host: 'brilliant.az',
    //     open: 'external'
    // });
    .browserSync({
        proxy: 'http://127.0.0.1:8000/',
        open: 'external',
    });

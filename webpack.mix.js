const mix = require('laravel-mix');

mix.sass('resources/src/black.scss', 'resources/dist')
.options({
    processCssUrls: false,
    postCss: [],
});

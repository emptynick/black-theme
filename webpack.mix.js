const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('resources/src/black.scss', 'resources/dist')
.options({
    processCssUrls: false,
    postCss: [ tailwindcss() ],
});

let mix = require("laravel-mix");

mix.js("resources/js/app.js", "dist/app.js").postCss(
    "resources/css/app.css",
    "dist/css"
);

mix.browserSync("127.0.0.1:8000");

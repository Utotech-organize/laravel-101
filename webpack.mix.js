let mix = require("laravel-mix");

mix.js().postCss("resources/css/app.css", "dist/css");

mix.browserSync("127.0.0.1:8000");

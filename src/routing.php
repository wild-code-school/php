<?php

require __DIR__.'/controllers/recipe-controller.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    browseRecipes();
}  elseif ('/show' === $urlPath) {
    browseRecipe();
}

else {
    header('HTTP/1.1 404 Not Found');
}
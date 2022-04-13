<?php

require __DIR__ . '/../models/recipe-model.php';


function browseRecipes(): void
{
    $recipes = getAllRecipes();

    require __DIR__.'/../views/index.php';
}

function browseRecipe(): void{
    var_dump('aozeizaoie');

    

    require __DIR__.'/../views/show.php';
}
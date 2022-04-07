<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../src/controller/controller.php';



echo $twig->render('hello.html.twig', ['name' => $name]);


echo $twig->render('_header.html.twig');
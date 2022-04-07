<?php

require_once __DIR__ . '/../config/twig.php';
require_once __DIR__ . '/../src/controller/controller.php';

echo $twig->render('person.html.twig', ['person'=> $persons]);

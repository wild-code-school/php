<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('salut Charles');
$marguerite->setPoop('@@@');
$marguerite->setTongue('u');

echo $marguerite;
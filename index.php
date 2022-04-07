<?php

require_once 'player.php';
require_once 'GoalKeeper.php';
require_once 'team.php';

$player1 = new Player('lulu', 'libellue');
$player2 = new Player('tata', 'yoyo');
$goal = new GoalKeeper('zgeg', 'de poulain', 26);

$team = new Team();

$team->addPlayer($player1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
        foreach ($team->players as $player) {
            echo '<li>' .$player.  '</li>';
        }
        ?>
    </ul>
</body>
</html>
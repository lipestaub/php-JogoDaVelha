<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/getNextPlayer.php';

    $currentPlayer = PLAYER_ONE_POSITION_ICON;

    $nextPlayer = getNextPlayer($currentPlayer);

    echo $nextPlayer;
?>
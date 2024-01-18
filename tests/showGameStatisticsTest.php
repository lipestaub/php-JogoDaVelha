<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/showGameStatistics.php';

    $players = [
        'Felipe',
        'Ariel'
    ];

    $matchesCount = 5;
    $playerOneWinsCount = 2;
    $playerTwoWinsCount = 2;
    $drawsCount = 1;

    showGameStatistics($players, $matchesCount, $playerOneWinsCount, $playerTwoWinsCount, $drawsCount);
?>
<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/showEndGameResultMessage.php';

    $players = [
        'Felipe',
        'Ariel'
    ];

    $winner = PLAYER_ONE_POSITION_ICON;

    showEndGameResultMessage($players, $winner);
?>
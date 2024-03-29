<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/playerWon.php';

    $playerOneWinnerBoard = [
        PLAYER_ONE_POSITION_ICON, PLAYER_ONE_POSITION_ICON, PLAYER_ONE_POSITION_ICON,
        PLAYER_TWO_POSITION_ICON, PLAYER_TWO_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON
    ];

    $playerTwoWinnerBoard = [
        PLAYER_ONE_POSITION_ICON, BLANK_POSITION_ICON, PLAYER_TWO_POSITION_ICON,
        PLAYER_ONE_POSITION_ICON, PLAYER_TWO_POSITION_ICON, PLAYER_ONE_POSITION_ICON,
        PLAYER_TWO_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON
    ];

    $noWinnerBoard = [
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        PLAYER_TWO_POSITION_ICON, PLAYER_TWO_POSITION_ICON, PLAYER_ONE_POSITION_ICON,
        BLANK_POSITION_ICON, PLAYER_ONE_POSITION_ICON, BLANK_POSITION_ICON
    ];

    $player = PLAYER_ONE_POSITION_ICON;

    $playerWon = playerWon($noWinnerBoard, $player);

    var_dump($playerWon);
?>
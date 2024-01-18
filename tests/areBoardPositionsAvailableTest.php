<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/areBoardPositionsAvailable.php';

    $emptyBoard = [
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON
    ];

    $completeBoard = [
        PLAYER_ONE_POSITION_ICON, PLAYER_TWO_POSITION_ICON, PLAYER_ONE_POSITION_ICON,
        PLAYER_TWO_POSITION_ICON, PLAYER_TWO_POSITION_ICON, PLAYER_ONE_POSITION_ICON,
        PLAYER_ONE_POSITION_ICON, PLAYER_ONE_POSITION_ICON, PLAYER_TWO_POSITION_ICON
    ];

    $areBoardPositionsAvailable = areBoardPositionsAvailable($emptyBoard);

    var_dump($areBoardPositionsAvailable);
?>
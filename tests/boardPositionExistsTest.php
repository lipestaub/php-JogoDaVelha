<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/boardPositionExists.php';

    $board = [
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON
    ];

    $position = 0;

    $boardPositionExists = boardPositionExists($board, $position);

    var_dump($boardPositionExists);
?>
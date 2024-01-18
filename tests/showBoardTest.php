<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/showBoard.php';

    $board = [
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON,
        BLANK_POSITION_ICON, BLANK_POSITION_ICON, BLANK_POSITION_ICON
    ];

    showBoard($board);
?>
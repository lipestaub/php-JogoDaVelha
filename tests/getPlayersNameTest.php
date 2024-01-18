<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/getPlayersName.php';

    $playersName = getPlayersName();

    print_r($playersName);
?>
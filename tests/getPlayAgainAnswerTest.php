<?php
    require_once __DIR__ . '/../modules/constants.php';
    require_once __DIR__ . '/../modules/variables.php';
    require_once __DIR__ . '/../modules/getPlayAgainAnswer.php';

    $playAgainAnswer = getPlayAgainAnswer();

    var_dump($playAgainAnswer);
?>
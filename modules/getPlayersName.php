<?php
    function getPlayersName() : array {
        $playerOneName = readline('Player 1 (' . PLAYER_ONE_POSITION_ICON .') - Digite seu nome: ');
        $playerTwoName = readline('Player 2 (' . PLAYER_TWO_POSITION_ICON . ') - Digite seu nome: ');

        $playerNames = [
            $playerOneName,
            $playerTwoName
        ];
        
        return $playerNames;
    }
?>
<?php
    function getNextPlayer(string $currentPlayer) : string {
        if ($currentPlayer === PLAYER_ONE_POSITION_ICON) {
            $nextPlayer = PLAYER_TWO_POSITION_ICON;
        }
        else {
            $nextPlayer = PLAYER_ONE_POSITION_ICON;
        }

        return $nextPlayer;
    }
?>
<?php
    function showEndGameResultMessage(array $players, string $winner) : void {
        echo "\nFim de Jogo!\n";
        if ($winner === PLAYER_ONE_POSITION_ICON) {
            echo "\n$players[0] (" . PLAYER_ONE_POSITION_ICON . ") foi o vencedor!\n";
        }
        else if ($winner === PLAYER_TWO_POSITION_ICON) {
            echo "\n$players[1] (" . PLAYER_TWO_POSITION_ICON . ") foi o vencedor!\n";
        }
        else {
            echo "\nDeu velha!\n";
        }
    }
?>
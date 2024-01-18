<?php
    function showGameStatistics(
        array $players,
        int $matchesCount,
        int $playerOneWinsCount,
        int $playerTwoWinsCount,
        int $drawsCount
    ) : void {
        echo "\nPartidas jogadas: $matchesCount\n";
        echo "Vitórias de $players[0] (" . PLAYER_ONE_POSITION_ICON . "): $playerOneWinsCount\n";
        echo "Vitórias de $players[1] (" . PLAYER_TWO_POSITION_ICON . "): $playerTwoWinsCount\n";
        echo "Empates: $drawsCount\n";
    }
?>
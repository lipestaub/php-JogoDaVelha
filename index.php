<?php
    require_once __DIR__ . '/modules/constants.php';
    require_once __DIR__ . '/modules/variables.php';
    require_once __DIR__ . '/modules/getPlayersName.php';
    require_once __DIR__ . '/modules/getBoard.php';
    require_once __DIR__ . '/modules/showBoard.php';
    require_once __DIR__ . '/modules/isBoardPositionAvailable.php';
    require_once __DIR__ . '/modules/boardPositionExists.php';
    require_once __DIR__ . '/modules/areBoardPositionsAvailable.php';
    require_once __DIR__ . '/modules/playerWon.php';
    require_once __DIR__ . '/modules/getPlayAgainAnswer.php';
    require_once __DIR__ . '/modules/getNextPlayer.php';
    require_once __DIR__ . '/modules/showEndGameResultMessage.php';
    require_once __DIR__ . '/modules/showGameStatistics.php';

    $players = getPlayersName();

    do {
        $player = PLAYER_ONE_POSITION_ICON;
        $board = getBoard();
        $winner = null;

        while ($winner === null) {
            showBoard($board);

            $playerName = $player === PLAYER_ONE_POSITION_ICON ? $players[0] : $players[1];

            $position = (int) readline("$playerName ($player), digite o código de uma das posições disponíveis: ");
        
            if (!boardPositionExists($board, $position)) {
                echo "\n Posição inexistente, tente novamente.\n";
                continue;
            }

            if (!isBoardPositionAvailable($board, $position)) {
                echo "\n Posição ocupada, tente novamente.\n";
                continue;
            }
            
            $board[$position] = $player;

            if (playerWon($board, $player)) {
                $winner = $player;
                break;
            }
            else if (!areBoardPositionsAvailable($board)) {
                break;
            }

            $player = getNextPlayer($player);
        }

        $matchesCount += 1;

        if ($winner === PLAYER_ONE_POSITION_ICON) {
            $playerOneWinsCount += 1;
        }
        else if ($winner === PLAYER_TWO_POSITION_ICON) {
            $playerTwoWinsCount += 1;
        }
        else {
            $drawsCount += 1;
        }

        showEndGameResultMessage($players, $winner);

        showBoard($board);

        $playAgain = getPlayAgainAnswer();
    } while ($playAgain === true);

    showGameStatistics($players, $matchesCount, $playerOneWinsCount, $playerTwoWinsCount, $drawsCount);
?>
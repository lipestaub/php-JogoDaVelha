<?php
    function getPlayAgainAnswer() : bool {
        do {
            $playAgainAnswer = readline('Deseja jogar novamente (S|N)? ');

            if (strtoupper($playAgainAnswer) === 'S') {
                return true;
            }
            else if (strtoupper($playAgainAnswer) === 'N') {
                return false;
            }
            else {
                echo "Digite uma resposta válida.\n";
            }
        } while ($playAgainAnswer !== true && $playAgainAnswer !== false);
    }
?>
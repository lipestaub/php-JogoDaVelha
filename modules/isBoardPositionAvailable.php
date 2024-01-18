<?php
    function isBoardPositionAvailable(array $board, int $position) : bool {
        if ($board[$position] === BLANK_POSITION_ICON) {
            return true;
        }
        else {
            return false;
        }
    }
?>
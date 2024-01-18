<?php
    function areBoardPositionsAvailable(array $board) : bool {
        return in_array(BLANK_POSITION_ICON, $board);
    }
?>
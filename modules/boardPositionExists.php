<?php
    function boardPositionExists(array $board, int $position) : bool {
        return array_key_exists($position, $board);
    }
?>
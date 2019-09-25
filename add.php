<?php

/**
 * Simple function that adds 2 numbers.
 *
 * @param mixed $a First number.
 * @param mixed $b Second number.
 *
 * @return int
 */
function add($a, $b) {
    if (!is_numeric($a)) {
        throw new Exception("Bad first operand type for add function (expected numeric) ", 1);
    }
    if (!is_numeric($a)) {
        throw new Exception("Bad second operand type for add function (expected numeric) ", 2);
    }

    return intval($a) + intval($b);
}
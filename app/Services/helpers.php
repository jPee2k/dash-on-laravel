<?php

/**
 * Custom functions
 */

namespace App\Services\helpers;

function is_even(int $key): bool
{
    return $key % 2 === 0 ? true : false;
}

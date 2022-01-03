<?php
const COUNT = 10000;
const MIN_RAND = 1;
const MAX_RAND = 10000;

/**
 * @throws Exception
 */
function randArray($count = COUNT, $minRand = MIN_RAND, $maxRand = MAX_RAND): array
{
    $myArray = [];
    for ($i = 0; $i < $count; $i++) {
        $myArray[] = random_int($minRand, $maxRand);
    }
    return $myArray;
}


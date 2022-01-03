<?php

function interpolationSearch($myArray, $num): int
{
    static $countSteps = 0;
    $start = 0;
    $last = count($myArray) - 1;
    $myArray = quickSort($myArray);

    while (($start <= $last) && ($num >= $myArray[$start])
        && ($num <= $myArray[$last])) {

        $pos = floor($start + (
                (($last - $start) / ($myArray[$last] - $myArray[$start]))
                * ($num - $myArray[$start])
            ));
        $countSteps++;
        if ($myArray[$pos] == $num) {
            return $countSteps;
        }

        if ($myArray[$pos] < $num) {
            $start = $pos + 1;
        } else {
            $last = $pos - 1;
        }
    }
    return $countSteps;
}

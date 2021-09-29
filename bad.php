<?php

// Expects a 2d array of numbers
// and returns the smallest number
// For example:
//   [[1, 2, 3], [2, 3, 5], [0, 2, 4, 1]]
function Small($array) {
    $r0 = find_min($array[0]);
    $r1 = find_min($array[1]);
    $r2 = find_min($array[2]);
    if ($r0 < $r1 && $r0 < $r2) {
          return $r0;
    } else if ($r1 < $r0 && $r1 < $r2)
    {
          return $r1;
    }
    else return $r2;
}

function find_min($n)
{
    $m = 0;
    for ($i = 1; $i < count($n); ++$i)
    {
        if ($i < $m)
            $m = $i;
    }
}

?>

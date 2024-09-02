<?php

/**
 * Question - You will be given an array and a threshold value. We have to find
 * the square of all the numbers in the array that are greater than the threshold
 * value.
 */

function filterAndTransform($array, $thresh)
{
    /**
     * This function 'uses' the $thresh value in the filter function
     */
    $filtered = array_filter($array, function ($value) use ($thresh) {
        return $value > $thresh;
    });

    $transformed = array_map(function ($value) {
        return $value * $value;
    }, $filtered);

    return $transformed;
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$thresh = 5;
$result = filterAndTransform($numbers, $thresh);
echo "Filtered and transformed Array: ";
print_r($result);

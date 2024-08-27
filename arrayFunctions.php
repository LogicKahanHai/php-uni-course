<?php

/**
 * There are some inbuilt functions for the arrays that we can use on them.
 */

/**
 * The first function is - array_combine($keys_arr, $values_array)
 *
 * It accepts 2 arrays with the same length and gives out an associative array with the first array
 * as the keys and the second array as the values
 */

$name = ["Rishi", "Mouli"];
$marks = [30, 40];
$combined = array_combine($name, $marks);

print_r($combined);
echo "<br>";
/**
 * The second function is - array_chunk()
 *
 */



/**
 * The third function is - array_count_values()
 *
 * It only takes the array, and returns an associative array with the count of
 * each unique element in the array
 */
$countMe = ["Block 33", "Block 33", "Block 36", "Block 36", "Block 38", "Block 38"];
print_r(array_count_values($countMe));

/**
 * array_diff
 */



/**
 * The fifth function is - array_intersect()
 *
 * It takes n arrays as arguments and the returns the common elements in both of them
 *
 *
 */

$a1 = array("a" => "red", "b" => "blue");


/**
 * The sixth function is - array_merge()
 *
 * It takes n arrays as arguments and merges them into a single array
 *
 * if the keys are the same, the value of the last array will be taken
 * otherwise, the values will be appended to the array
 */


/**
 * The seventh function is - array_push()
 *
 * It takes an array and a value and appends the value to the end of the array
 */


/**
 * The eighth function is - array_pop()
 *
 * It takes an array and removes the last element from the array
 *
 */


/**
 * The ninth function is - array_reverse()
 *
 * It takes an array and returns the reversed array
 */


/**
 * The tenth function is - array_slice()
 *
 * It takes an array, start index, and length as arguments and returns the sliced array
 */

/**
 * The eleventh function is - array_column()
 *
 * It takes an array and the key of the column that we want to extract from the array
 */
$result = array(
    array(
        'id' => 1,
        'first_name' => 'Rishi',
        'last_name' => 'Raj',
    ),
    array(
        'id' => 3,
        'first_name' => 'Mouli',
        'last_name' => 'Bhalla',
    )
);

echo "<br>";

print_r(array_column($result, 'first_name', 'last_name'));

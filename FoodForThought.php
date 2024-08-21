<?php
/**
 * Q1.  I/P --> [1,2,[3,4,[5]]]
 *      O/P --> [1,2,3,4,5]
 * 
 * Q2.  I/P --> [1,2,3,4,5]
 *      O/P --> [4,5,1,2,3]
 */


$array1 = [1,2,[3,4,[5]]];
$array2 = [1,2,3,4,5];

// //Solution 1

function print_multi_array($arr) : void {
    foreach($arr as $ele) {
        if(!is_array($ele)) {
            echo "$ele, ";
        }else {
            print_multi_array($ele);
        }
    }
    echo "<br>";
    
};

echo "Solution 1: ";
print_multi_array($array1);
echo "<br><br>";

echo "Solution 2: ";



function rotate_array($arr, $start, $end) {
    $len = $end - $start + 1;
    for($i=0; $i<$len/2; $i++) {
        $temp = $arr[$start + $i];
        $arr[$start + $i] = $arr[$end-$i];
        $arr[$end-$i] = $temp;
    }
    return $arr; 
}

$new_arr = rotate_array($array2, 0, 2);

$new_arr = rotate_array($new_arr, 3, 4);

$new_arr = rotate_array($new_arr, 0, 4);
echo "New Array - " . implode(", ", $new_arr) . "<br>";



/**
 * This folowing code has 
 */

Function calc($price, $tax="") {
    $total = $price+($price*$tax);
    Echo $total;
}

Calc(42);


function alpha($x) {
    return $x * 2;
}
function beta($x) {
    return $x + 5;
}
function gamma($x, $y, $z) {
    return $z($x) + $y($x);
}

echo gamma(2, 'alpha', 'beta');



?>
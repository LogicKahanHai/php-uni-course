<?php
/**
 * PHP can accept variables in function arguments by various methods.
 * 
 * 1. Pass By Value - its the generic form.
 * 
 */

// 2. Pass By Reference

Function additionPBR(&$val) {
    $val += 10;
}

$num = 5;
additionPBR($num);
echo "After Addition (Pass By Refenrence): ".$num;


/**
 * Strict Variable - It defines if the function should typecast the variable 
 * while accepting arguments or not.
 * 
 * This is set on top of the php code in the php start tag. 
 * 
 * The default value of Strict Variable is 0. meaning NOT Strict
 * 
 * <?php strict_value=1
 * 

*/

function addWithoutStrict($a, $b) {
    return $a + $b;
}

echo "<br><br>";

$c = addWithoutStrict(5, "6 Days");

echo "<br><br>";

echo $c;



/**
 * Default values
 * We can define while writing the function what default value should be assigned 
 * to the function if no values is passed.
 * 
 */


?>
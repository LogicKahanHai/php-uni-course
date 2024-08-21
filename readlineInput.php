<?php

/**
 * Let's create a cmdline php program that can setup a multi dimensional array.
 */



function checkBrackets(string $input) {
    $bracket_open = 0;
    for ($i = 0; $i<strlen($input); $i++){
        if ($input[$i] == '[') {
            $bracket_open++;
        }
        if ($input[$i] == ']') {
            $bracket_open--;
        }
    }

    return $bracket_open == 0;
}


echo "Enter a multi-dimensional array (like '[1,2,[3,4,[5,[6]]]]'): ";
$cmd_input = readline("Enter a multi-dimensional array (like '[1,2,[3,4,[5,[6]]]]'): ");

echo checkBrackets($cmd_input);




?>
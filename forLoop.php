<?php

for($i = 5; $i > 0; $i--) {
    for ($k=0; $k < 5-$i; $k++) {
        echo " ";
    }
    for($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "\n";
}

?>
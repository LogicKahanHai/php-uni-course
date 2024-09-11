<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Arrays</title>
</head>

<body>

    <h1>Merge 2 Arrays</h1>
    <?php

    $array1 = $array2 = [];
    $mergedArray = [];

    function sanitizeInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    function createArray($input)
    {
        $array = [];
        $input = explode(",", sanitizeInput($input));
        foreach ($input as $value) {
            array_push($array, $value);
        }
        return $array;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["arr1"])) {
            $array1 = createArray($_POST["arr1"]);
        }
        if (isset($_POST["arr2"])) {
            $array2 = createArray($_POST["arr2"]);
        }

        $mergedArray = array_merge($array1, $array2);

    }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        Enter the first array: <input type="text" name="arr1" id="arr1" placeholder="Eg. 1,2,3,4"> <br>
        Enter the second array: <input type="text" name="arr2" id="arr2" placeholder="Eg. 5,6,7,8"> <br>
        <input type="submit" value="Merge Arrays">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST" && count($mergedArray) > 0) {
        echo "<h2>Merged Array</h2>";
        $show = implode(",", $mergedArray);
        echo "[$show]";
    }


    ?>

</body>

</html>

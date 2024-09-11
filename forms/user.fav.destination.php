<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite Destination</title>
</head>

<body>

    <?php
    $city = '';
    $points = null;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $city = validate_input($_POST["city"]);
    }

    /**
     * This function validates the incoming input and sanitizes it for usage.
     * @param string $input
     * @return string
     */
    function validate_input($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);

        return $input;
    }

    ?>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        Enter your Favourite Destination: <input type="text" name="city" id="city">
        <input type="submit">
    </form>

    <?php
    if (isset($city)) {
        echo preg_match("/\b[aeiouAEIOU]\w*/i", $city);
        if (preg_match("/\b[aeiouAEIOU]\w*/i", $city)) {
            // This means that the $input string is starting with a vowel
            $points = 100;
        } else {
            $points = 50;
        }
        echo "Your Bonus Points are: $points";
    } else {
        echo $city;
        echo "Please enter the city to check your bonus points";
    }


    ?>

</body>

</html>

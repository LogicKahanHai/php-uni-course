<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Name Length</title>
</head>

<body>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        Enter your name: <input type="text" name="name" />
        <input type="submit">
    </form>

    <?php
    if (isset($_POST["name"])) {
        echo "The length of your name is: " . strlen($_POST["name"]);
    }
    ?>
</body>

</html>

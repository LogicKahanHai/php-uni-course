<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Result</title>
</head>

<body>
    <?php
    if (isset($_GET["formtype"])) {
        echo "<p> This data is submitted using get method </p>";
    }

    ?>


    Welcome <?php echo $_GET["username"]; ?> </br>
    Your blood group is: <?php echo $_GET["bloodgroup"]; ?>
</body>

</html>

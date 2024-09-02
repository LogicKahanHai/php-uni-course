<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
</head>

<body>
    <?php
    if (isset($_POST["marks"])) {
        if ($_POST["marks"] >= 30) {
            echo "<p> Congratulations! You have passed the test! </p>";
        } else {
            echo "<p> LOL 🫵😂 ! You have failed the test </p>";
        }
    }
    ?>
    <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
        Enter you marks: <input type="number" name="marks" /> <br>
        <input type="submit">
    </form>

</body>

</html>

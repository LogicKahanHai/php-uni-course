<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>

<body>

    <?php
    $name = $email = $password = "";
    $flag = false;

    function validateInput($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = validateInput($_POST["name"]);
        $email = validateInput($_POST["email"]);
        $password = validateInput($_POST["password"]);
    }
    ?>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <p>Name: <input type="text" name="name" id="name" placeholder="Enter your name"><span style="color: red;">*
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $name == "")
                    echo "Name is required";
                elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $flag = false;
                    echo "Only letters and white space allowed";
                }
                ?>
            </span></p>
        <p>Email: <input type="email" name="email" id="email" placeholder="Enter your email"><span style="color: red;">*
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $email == "")
                    echo "Email is required";
                elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !filter_var($email, FILTER_VALIDATE_EMAIL))
                    echo "Invalid email format";
                ?>
            </span></p>
        <p>Password: <input type="password" name="password" id="password" placeholder="Enter your password"><span
                style="color: red;">*
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $password == "")
                    echo "Password is required";
                ?>
            </span></p>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && $name != "" && $email != "" && $password != "") {
        echo "Name: $name<br>";
        echo "Email: $email <br>";
        echo "Password: $password<br>";
    }
    ?>
</body>

</html>

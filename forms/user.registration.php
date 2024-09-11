<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>

<body>
    <?php
    $name = $email = $gender = "";
    /**
     * If like in this if statement I did not validate the input, I was able to add a script in one of the inputs and execute javascript there.
     */
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST["name"];
    //     $email = $_POST["email"];
    //     $gender = $_POST["gender"];
    // }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
    }

    /**
     * This Function will validate the input that is being recieved from the form
     * @param string $data
     * @return string
     */
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation</h2>
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        Name: <input type="text" name="name" id="name">
        <br><br>
        Email: <input type="text" name="email" id="email">
        <br><br>
        Gender:
        <input type="radio" name="gender" id="gender" value="female">Female
        <input type="radio" name="gender" id="gender" value="male">Male
        <br><br>
        <input type="submit">
    </form>

    <?php
    echo "<h2> Your Input: </h2>";
    echo "Name: $name";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Gender: $gender";
    ?>


</body>

</html>

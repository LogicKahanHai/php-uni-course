<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Camp</title>
</head>

<body>
    <!--
        We use the GET method in the form so that we can use the $_GET
        super global variable in the 'blood.donation.action.php' file to recieve
        and process the data. The only downside is that GET method is not very secure.
    -->
    <form action="blood.donation.action.php" method="get">
        Username: <input type="text" name="username" />
        <br>
        Blood Group: <input type="text" name="bloodgroup" />
        <br>
        <input type="hidden" value="get" name="formtype">
        <input type="submit" />
    </form>
    <br>
    <br>
    <br>
    <br>

    <!--
        We can also use the POST Method to pass the data from the form.
     -->

    <form action="blood.donation.action.php" method="post">
        Username: <input type="text" name="username" />
        <br>
        Blood Group: <input type="text" name="bloodgroup" />
        <br>
        <input type="hidden" value="post" name="formtype">
        <input type="submit" />
    </form>
</body>

</html>

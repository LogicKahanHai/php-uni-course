<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File input</title>
</head>

<body>

    <?php

    $message = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["file"])) {
            echo "File is set";
            validateFile();
        } else {
            echo "FIle is not set";
            $message = "Please select a file";
        }
    }

    function validateFile()
    {
        $allwedFileTypes = array('pdf', 'docx');
        $maxFileSize = 10 * 1024 * 1024;
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        echo $fileName;
        $filetype = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($filetype, $allwedFileTypes)) {
            $message = "ONLY PDF or DOCX";
        } elseif ($fileSize > $maxFileSize) {
            $message = "File should be less than 10MB";
        } else {
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filepath = $uploadDir . basename($fileName);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
                $message = "File uploaded successfully";

            } else {
                $message = "Error in uploading the file";
            }
        }

    }

    ?>

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="file" name="file" id="file">
        <input type="submit">
    </form>

    <?php
    echo $message;
    ?>

</body>

</html>

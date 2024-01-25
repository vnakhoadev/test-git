<?php
if (isset($_SERVER["REQUEST_METHOD"])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];

        echo "name post: " . $name;
    } else if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = $_GET['name'];

        echo "name get: " . $name;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="./test.php">
        <input type="submit" value="Chuyển hướng">
    </form>
</body>
<?php
$name = [
    'a' => 1,
    'b' => 2,
];

$y = array_map(fn ($item) => $item, $name);

// $y = array_map(function ($value) {
//     return $value + 1;
// }, $name);
// print_r($y);

// echo $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./test1.php" method="POST">
        <input type="text" name="name">
        <input type="submit">
    </form>

    <form action="./test1.php" method="GET">
        <input type="text" name="name">
        <input type="submit" value="GET">
    </form>
</body>

</html>
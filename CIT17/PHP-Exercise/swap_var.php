<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>
<body>
    <form action="swap_var.php" method="POST">
        Number X: <input type="number" name="x"><br>
        Number Y: <input type="number" name="y"><br>
        <input type="submit">
    </form>


<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST["x"];
        $y = $_POST["y"];

        echo "<h1>Before: X = $x, Y= $y </h1>";

        $z = $x;
        $x = $y;
        $y = $z;

        echo "<h1>After: X = $x, Y = $y </h1>";
    }
?>
</body>
</html>
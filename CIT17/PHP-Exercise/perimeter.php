<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and Perimeter of a Rectangle</title>
</head>
<body>
    <form action="perimeter.php" method="POST">
        Length: <input type="number" name="length"><br>
        Width: <input type="number" name="width"><br>
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];

        $area = $length * $width;
        $perimeter = (2 * $length) + (2 * $width);

        echo "<h1>Area and Perimeter of the Rectangle</h1>";
        echo "<h2>Length: $length<br>Width: $width</h2>";
        echo "<h2>Area: $area <br> Perimeter: $perimeter</h2>";
    }
?>
</body>
</html>
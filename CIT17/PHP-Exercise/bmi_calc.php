<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bmi_calc.php" method="POST">
        Weight (kg): <input type="double" name="weight"><br>
        Height (m): <input type="double" name="height"><br>
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        $bmi = $weight/($height*$height);

        echo "<h1>BMI Calculator<br></h1>";
        echo "<h2>Weight: $weight kg <br>Height: $height m</h2>";
        echo "<h2>Body Mass Index: $bmi</h2>";
    }
?>
</body>
</html>
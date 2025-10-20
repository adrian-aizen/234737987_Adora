<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Calculator</title>
</head>
<body>
    <form action="temperature.php" method="POST">
        Celcius: <input type="number" name="celcius">
        <input type="submit">
    </form>


<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celcius = $_POST["celcius"];
        $fahrenheit = ($celcius * 1.8) + 32;

        echo "<h1>Temperature Converter (°C to °F)</h1>";
        echo "<h2>Celcius: $celcius °C <br>Fahrenheit: $fahrenheit °F</h2>";
    }
?>
</body>
</html>
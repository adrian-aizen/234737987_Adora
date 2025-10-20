<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tcost_estimator.php" method="POST">
        Distance (km): <input type="double" name="distance"><br>
        Fuel Consumption (km/l): <input type="double" name="fuel_consumption"><br>
        Fuel Price (l): <input type="double" name="fuel_price"><br>
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance = $_POST["distance"];
        $fuel_consumption = $_POST["fuel_consumption"];
        $fuel_price = $_POST["fuel_price"];

        $needed_fuel = $distance / $fuel_consumption;
        $travel_cost = $needed_fuel * $fuel_price;

        echo "Distance: $distance km<br>";
        echo "Fuel Consumption: $fuel_consumption km/l<br>";
        echo "Fuel Price: ₱$fuel_price per liter<br>";
        echo "Fuel Needed: ". number_format($needed_fuel,2) ." liters<br>";
        echo "Travel Cost: ₱" . number_format( $travel_cost,2);
    }
?>
</body>
</html>
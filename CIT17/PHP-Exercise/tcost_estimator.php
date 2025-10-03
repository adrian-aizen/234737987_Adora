<?php
    $distance = 300;
    $fuel_consumption = 14;
    $fuel_price = 67;

    $needed_fuel = $distance / $fuel_consumption;
    $travel_cost = $needed_fuel * $fuel_price;

    echo "Distance: $distance km<br>";
    echo "Fuel Consumption: $fuel_consumption km/l<br>";
    echo "Fuel Price: ₱$fuel_price per liter<br>";
    echo "Fuel Needed: ". number_format($needed_fuel,2) ." liters<br>";
    echo "Travel Cost: ₱" . number_format( $travel_cost,2);
?>
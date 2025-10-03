<?php 
    $x = 50;
    $y = 100;

    echo "<h1>Before: X = $x, Y= $y </h1>";

    $z = $x;
    $x = $y;
    $y = $z;

    echo "<h1>After: X = $x, Y = $y </h1>";
?>
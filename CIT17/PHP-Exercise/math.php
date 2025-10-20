<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
</head>
<body>
    <form action="math.php" method="POST">
        Number A: <input type="number" name="num_A"><br>
        Number B: <input type="number" name="num_B"><br>
        <input type="submit">
    </form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_A = $_POST["num_A"];
        $num_B = $_POST["num_B"];

        $sum = $num_A + $num_B;
        $difference = $num_A - $num_B;
        $product = $num_A * $num_B;
        $quotient = $num_A / $num_B;

        echo "<h2>Number A: $num_A <br></h2>";
        echo "<h2> Number B: $num_B</h2>";
        echo "<h3>Sum: $sum<br> Difference: $difference <br> Product: $product <br> Quotient: $quotient</h3>";
    }
?>
</body>
</html>

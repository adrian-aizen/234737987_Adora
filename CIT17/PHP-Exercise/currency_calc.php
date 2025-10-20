<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <form action="currency_calc.php" method="POST">
        Amount in Peso: <input type="double" name="peso"><br>
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];

        $usd_rate = 0.017;
        $eur_rate = 0.016;
        $jpy_rate = 2.65;

        $usd = $peso * $usd_rate;
        $eur = $peso * $eur_rate;
        $jpy = $peso * $jpy_rate;

        echo "<h1>Amount in Peso: ₱$peso<br></h1>";
        echo "<h2>USD: $$usd<br></h2>";
        echo "<h2>EUR: €$eur<br></h2>";
        echo "<h2>JPY: ¥$jpy<br></h2>";
    }
?>
</body>
</html>
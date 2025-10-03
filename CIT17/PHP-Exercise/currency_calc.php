<?php
    $peso = 1000;
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
    
?>
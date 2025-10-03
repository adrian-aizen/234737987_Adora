<?php
    $balance = 2500;
    $deposit = 1000;
    $withdraw = 500;

    $balance = $balance + $deposit;
    $balance = $balance - $withdraw;

    echo "<h1>Bank Account Simulation</h1>";
    echo "Balance(Final): ₱" . $balance;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Simulation</title>
</head>
<body>
    <form action="bank_acc_simulation.php" method="POST">
        
    </form>

<?php
    $balance = 2500;
    $deposit = 1000;
    $withdraw = 500;

    $balance = $balance + $deposit;
    $balance = $balance - $withdraw;

    echo "<h1>Bank Account Simulation</h1>";
    echo "Balance(Final): ₱" . $balance;
    
?>
</body>
</html>
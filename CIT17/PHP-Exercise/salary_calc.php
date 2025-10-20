<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salary_calc.php" method="POST">
        Basic Salary: <input type="number" name="basic_salary"><br>
        Allowance: <input type="number" name="allowance"><br>
        Deduction: <input type="number" name="deduction"><br>
        <input type="submit">
    </form>    

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basic_salary = $_POST["basic_salary"];
        $allowance = $_POST["allowance"];
        $deduction = $_POST["deduction"];

        $net_salary = $basic_salary + $allowance - $deduction;


        echo "<h2>Basic Salary: ₱$basic_salary<br></h2>";
        echo "<h2>Allowance: ₱$allowance<br></h2>";
        echo "<h2>Deduction: ₱$deduction<br></h2>";
        echo "<h2>Net Salary: ₱$net_salary<br></h2>";
    }
?>
</body>
</html>
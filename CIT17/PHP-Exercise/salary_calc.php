<?php
    $basic_salary = 24000;
    $allowance = 5000;
    $deduction = 4000;

    $net_salary = $basic_salary + $allowance - $deduction;


    echo "<h2>Basic Salary: ₱$basic_salary<br></h2>";
    echo "<h2>Allowance: ₱$allowance<br></h2>";
    echo "<h2>Deduction: ₱$deduction<br></h2>";
    echo "<h2>Net Salary: ₱$net_salary<br></h2>";
    
?>
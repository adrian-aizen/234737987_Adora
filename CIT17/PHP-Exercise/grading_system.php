<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grading System</title>
</head>
<body>
    <form action="grading_system.php" method="POST">
        Math Grade: <input type="number" name="math"><br>
        English Grade: <input type="number" name="english"><br>
        Science Grade: <input type="number" name="science"><br>
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $math = $_POST["math"];
        $english = $_POST["english"];
        $science = $_POST["science"];

        $average = ($math + $english + $science) / 3;

        
        if ($average >= 95){
            $grade = "A";
        } elseif ($average >= 90){
            $grade = "B";
        } elseif ($average >= 85){
            $grade = "C";
        } elseif ($average >= 80){
            $grade = "D";
        } elseif ($average >= 75){
            $grade = "E";
        } else {
            $grade = "F";
        }

        echo "<h2>Math Grade: $math<br></h2>";
        echo "<h2>English Grade: $english<br></h2>";
        echo "<h2>Science Grade: $science<br></h2>";
        echo "<h2>Average Grade: $average<br></h2>";
        echo "<h2>Grade: $grade<br></h2>";
    }
?>
</body>
</html>
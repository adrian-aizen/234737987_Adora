<?php
    $math = 93;
    $english = 87;
    $science = 78;

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

    echo "<h2>Math: $math<br></h2>";
    echo "<h2>English: $english<br></h2>";
    echo "<h2>Science: $science<br></h2>";
    echo "<h2>Average: $average<br></h2>";
    echo "<h2>Grade: $grade<br></h2>";

?>
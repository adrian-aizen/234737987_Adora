<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself</title>
</head>
<body>
    <form action="intro.php" method="POST">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Favorite Color: <input type="text" name="favecolor"><br>
    <input type="submit">
    </form> 

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $favecolor = $_POST['favecolor'];

        echo "<h2>Hello! I am $name. $age years of age. My favorite color is $favecolor. </h2>";
        }

    ?>
</body>
</html>
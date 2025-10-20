<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <form action="str_manipulation.php" method="POST">
        Sentence: <input type="text" name="sentence">
        <input type="submit">
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sentence = $_POST["sentence"];

        $string_length = strlen($sentence);
        $string_word_count = str_word_count($sentence);
        $uppercase = strtoupper($sentence);
        $lowercase = strtolower($sentence);

        echo "<h1>Sentence: $sentence </h1>";
        echo "<h3>String Length: $string_length </h3>";    
        echo "<h3>String Word Count: $string_word_count </h3>";
        echo "<h3>String in Uppercase: $uppercase </h3>";
        echo "<h3>String in Lowercase: $lowercase </h3>";
    }
?>
</body>
</html>
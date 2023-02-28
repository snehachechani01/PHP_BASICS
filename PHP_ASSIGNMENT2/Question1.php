<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question1</title>
</head>
<body>
<?php
        $cars = array('Dastun', 'Honda', 'BMW');
        sort($cars);
        echo "<ol type=1>";

        foreach ($cars as $y)
        {
            echo "<li>$y</li>";
        }
        
        echo "</ol>";
    ?>
</body>
</html>

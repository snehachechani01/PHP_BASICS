<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question9</title>
</head>
<body>
<?php
        $cars = array('Dastun', 'Maruti', 'BMW','Honda');
        echo "Original order : <br>";
        foreach($cars as $c)
        {
        echo "$c <br> ";
        }

        rsort($cars);
        echo "<br> <br> ";

        echo "Reverse order : <br>";
        foreach($cars as $c)
        {
        echo "$c <br> ";
        }
        ?>
</body>
</html>
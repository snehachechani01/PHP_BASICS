<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question4</title>
</head>
<body>
<?php
    $text = "techstudy";
    $search = "t";
    $count = "0";
    for ($x = "0"; $x < strlen($text); $x++) 
    {
        if (substr($text, $x, 1) == $search) 
        {
            $count = $count + 1;
        }
    }
    echo $count;
?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question8</title>
</head>
<body>
<?php
    $sum = 0;
    echo "Sum : ";
    for($a=1;$a<=10;$a++)
    {
        if($a%2 == 0)
        {
            $sum = $sum + $a;
        } 
    }
    echo $sum; 
?>
</body>
</html>
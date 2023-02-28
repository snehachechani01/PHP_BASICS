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
    $month_temp = "70, 60, 62, 64, 71, 68, 73, 85, 66, 64, 76, 63, 81, 60, 73,
    68, 72, 73, 75, 65, 74, 63, 69, 65, 64, 61, 66, 66, 78, 60";

    $new_array = explode(',', $month_temp);
    $total_temp = 0;
    $new_array_length = count($new_array);

    foreach($new_array as $temp)
    {
        $total_temp += $temp;
    }

    $avg_temp = $total_temp/$new_array_length;
    echo "Average Temperature is : ".$avg_temp." <br>"; 
    sort($new_array);

    echo " List of five lowest temperatures :" ;
    for ($i=0; $i< 5; $i++)
    { 
        echo "$new_array[$i] &nbsp";
    }

    echo "<br> List of five highest temperatures :";
    for ($i=($new_array_length-5); $i< ($new_array_length); $i++)
    {
        echo "$new_array[$i] &nbsp";
    }
    ?>
</body>
</html>
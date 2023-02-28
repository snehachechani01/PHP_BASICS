<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question10</title>
</head>
<body>
<?php
$a = 5;
$b = 10;
 

echo "\nThe number before swapping is:\n";
echo "Number a =".$a. " and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
echo "<br>";
 
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
?>
</body>
</html>
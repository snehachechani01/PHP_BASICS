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

$char = 'k';
$nextchar = ++$char; 

if (strlen($nextchar) > 100){
    $nextchar = $nextchar[0];
}
echo $nextchar."<br />";
?>

</body>
</html>
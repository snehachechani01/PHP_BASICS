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

$str = 'The most common sentence pattern is to write the subject before the verb';
echo "Original String : " . $str . "<br>";
echo "Updated string : " . preg_replace('/The /', 'Best ', $str, 1); 

?>
</body>
</html>

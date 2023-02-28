<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question12</title>
</head>
<body>
<?php

$original_string = 'I am Sigmainfosolutions';
$add ='from';
$insert_pos = 5;
$new_string = substr_replace($original_string, $add.' ', $insert_pos, 0);
echo "Original String : " . $original_string . "<br>";
echo "String after Insertion : " . $new_string;

?>
</body>
</html>
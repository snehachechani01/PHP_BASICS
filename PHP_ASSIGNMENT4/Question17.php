<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question17</title>
</head>
<body>
<?php

$str = 'The purpose of our lives is to be happy';
echo "Original : " .$str ."<br>";
echo "First six words : " .implode(' ', array_slice(explode(' ', $str), 0, 6))."\n";

?>
</body>
</html>
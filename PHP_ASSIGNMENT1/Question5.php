<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question5</title>
</head>
<body>
<?php
$text = 'SNEHA CHECHANI';
$text = preg_replace('/(\b[a-z])/i','<span style="color:pink;">\1</span>',$text);
echo $text;
?> 
</body>
</html>
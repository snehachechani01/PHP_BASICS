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

function generate_pass($chars) 
{
  $str = '1234567890@%$*&!#abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  return substr(str_shuffle($str), 0, $chars);
}
  echo generate_pass(16)."\n";

?>   
</body>
</html>
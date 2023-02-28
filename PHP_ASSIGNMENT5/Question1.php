<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question1</title>
</head>
<body>
<?php  
    $string = "SIGMAINFOSOLUTIONS";  
    $length = strlen($string); 
    echo "The Original String is $string <br>"; 
    for ($i=($length-1) ; $i >= 0 ; $i--)   
    {  
      echo  $string[$i];  
    }  
    ?>    


</body>
</html>
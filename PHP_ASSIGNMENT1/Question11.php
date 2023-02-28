<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question11</title>
</head>
<body>
<?php  
    $num=409;  
    $total=0;  
    $a=$num;  
    while($a!=0)  
    {  
    $rem=$a%10;  
    $total=$total+$rem*$rem*$rem;  
    $a=$a/10;  
    }  
    if($num==$total)  
    {  
    echo ("Yes it is an Armstrong number");  
    }  
    else  
    {  
    echo ("No it is not an armstrong number");  
    }  
    ?>  
</body>
</html>
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
    $json= 
        '{"name" : "Sigma", "city" : "Ahmdeabad" , "state" : "Gujarat"}';
       
    $obj = json_decode($json);

    echo $obj->{'name'};
    echo "<br>";
    echo $obj->{'city'};
    echo "<br>";
    echo $obj->{'state'};
    
    

 ?>
    
</body>
</html>
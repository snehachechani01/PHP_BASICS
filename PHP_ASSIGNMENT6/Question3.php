<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question3</title>
</head>
<body>
<?php
$one = array("Name" => "Sneha", "Age"=> "21", "location"=> "Udaipur" ,"State"=> "Rajasthan"); 
$two = array('red', 'green', 'white');
echo(json_encode($one));
echo "<br>";
echo(json_encode($two));
?>

</body>
</html>
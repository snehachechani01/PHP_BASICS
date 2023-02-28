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
$ip_address = gethostbyname("www.google.com");
echo "IP Address of Google is - ". $ip_address;
echo "</br>";
$ip_address=gethostbyname("www.w3schools.com");
    echo "IP Address of W3 School is - ". $ip_address;
?>
</body>
</html>
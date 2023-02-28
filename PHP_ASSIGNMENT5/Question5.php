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
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."<br>" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz" . "<br>";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."<br>";
   }
     else
   {
     echo $i."\n";
   }
 }
?>
</body>
</html>
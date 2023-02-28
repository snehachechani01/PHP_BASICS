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
        function multiply_two_lists($x, $y)
        {
            $a = explode(' ',trim($x));
            $b = explode(' ',trim($y));
            foreach($a as $key=>$value){
            $output[$key] = $a[$key]*$b[$key];
        }
        return implode(' ',$output);
        }
        echo multiply_two_lists(("5 6 7"), ("8 9 10"));
    ?>

</body>
</html>
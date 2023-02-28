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

    function Palindrome($number)
    {
        $temp = $number;
        $new = 0;
        while (floor($temp)) {
            $rem = $temp % 10;
            $new = $new * 10 + $rem;
            $temp = $temp / 10;
        }
        if ($new == $number) {
            return 1;
        } else {
            return 0;
        }
    }


    $original= 14415;
    if (Palindrome($original)) {
        echo "Palindrome";
    } else {
        echo "Not a Palindrome";
    }

    ?>
</body>

</html>
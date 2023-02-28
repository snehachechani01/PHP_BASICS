<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question2.php</title>
</head>

<body>
    <?php
    function array_sort($a)
    {
        for ($x = 0; $x < count($a); ++$x) {
            $min = $x;
            for ($y = $x + 1; $y < count($a); ++$y) {
                if ($a[$y] < $a[$min]) {
                    $temp = $a[$min];
                    $a[$min] = $a[$y];
                    $a[$y] = $temp;
                }
            }
        }
        return $a;
    }
    $a = array(15, 10, 5, 'infosolutions', 'sigma');
    print_r(array_sort($a));
    ?>
</body>

</html>
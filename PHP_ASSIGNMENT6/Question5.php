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
    
    function bubble_Sort($my_array )
    {
        do
        {
            $swapped = false;
            for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
            {
                if( $my_array[$i] > $my_array[$i + 1] )
                {
                    list( $my_array[$i + 1], $my_array[$i] ) =
                            array( $my_array[$i], $my_array[$i + 1] );
                    $swapped = true;
                }
            }
        }
        while( $swapped );
    return $my_array;
    }
     $test_array = array(30,25,20,15,10,5);
    echo "Original Array : <br>";
    echo implode(', ',$test_array );
    echo "<br>";
    echo "Sorted Array:";
    echo implode(', ',bubble_Sort($test_array));
    ?>
</body>
</html>
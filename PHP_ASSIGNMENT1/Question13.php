<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question13</title>
</head>
<body>
<?php
    function remove_duplicates_list($list1) {
    $nums_unique = array_values(array_unique($list1));
    return $nums_unique ;
    }

    $nums = array(1,2,2,3,4,4,5,6,7,7);
    print_r(remove_duplicates_list($nums));
  ?>
</body>
</html>


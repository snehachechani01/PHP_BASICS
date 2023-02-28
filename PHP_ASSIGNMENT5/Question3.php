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




    function Palindrome($MyString)
    {
        $l = 0;
        $r = strlen($MyString) - 1;
        $flag = 0;

        while ($r > $l) {
            if ($MyString[$l] != $MyString[$r]) {
                $flag = 1;
                break;
            }
            $l++;
            $r--;
        }

        if ($flag == 0) {
            echo $MyString . " is a Palindrome string.<br>";
        } else {
            echo $MyString . " is not a Palindrome string.<br>";
        }
    }

    Palindrome("radar") ; 
    Palindrome("naman");
    Palindrome("malayalam");
   


    ?>
</body>

</html>
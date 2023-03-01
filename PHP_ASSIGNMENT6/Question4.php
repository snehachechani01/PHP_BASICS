<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question4</title>
</head>
<body>
    <?php
    
function json_error_message($json_str)
{
$json[] = $json_str;
echo $json;
foreach ($json as $string)
{
echo 'Decoding: ' . $string."\n";
json_decode($string);

switch (json_last_error())
{
case JSON_ERROR_NONE:
echo ' - No errors'."<BR>";
break;
case JSON_ERROR_DEPTH:
echo ' - Maximum stack depth exceeded'."<BR>";
break;
case JSON_ERROR_STATE_MISMATCH:
echo ' - Underflow or the modes mismatch'."<BR>";
break;
case JSON_ERROR_CTRL_CHAR:
echo ' - Unexpected control character found'."<BR>";
break;
case JSON_ERROR_SYNTAX:
echo ' - Syntax error, malformed JSON'."<BR>";
break;
case JSON_ERROR_UTF8:
echo ' - Malformed UTF-8 characters, possibly incorrectly encoded'."<BR>";
break;
default:
echo ' - Unknown error'."<BR>";
break;
}
}
}

json_error_message('{"NAME": "SIGMA INFOSOLUTIONS"}');
?>

</body>
</html>
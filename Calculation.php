<?php
$number1 = $_REQUEST['Number1'];
$number2 = $_REQUEST['Number2'];
$operator = $_REQUEST['Operator'];
//if (!is_numeric($number1) || is_numeric($number2))
//{
// echo "Sorry, but one of your inputs is not a number.";
//echo"Go back, and try again.";
//}
//else{
$result = 0;
switch ($operator)
{
    case "+":
        $result = $number1+$number2;
        break;

    case "-":
        $result = $number1-$number2;
        break;

    case "*":
        $result = $number1*$number2;
        break;

    case "/":
        $result = $number1/$number2;
        break;
}
//}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?= $result?>
</body>
</html>
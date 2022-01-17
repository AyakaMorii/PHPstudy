<?php
$number1 = $_POST['number1'];
$symbol = $_POST['symbol'];
$number2 = $_POST['number2'];
$answer ='';
if (isset($number1) && isset($number2) && is_numeric($number1) && is_numeric($number2)) {
    switch ($symbol) {
        case '+':
            $answer = $number1 + $number2;
            break;
        case '-':
            $answer = $number1 - $number2;
            break;
        case '*':
             $answer = $number1 * $number2;
            break;
      case '/':
            $answer = $number1 / $number2;
            break;
    };
    header('Location: index.php/?answer='.$answer);
} else {
    $message = '無効な値です';
    header('Location: index.php/?message='.$message);
};

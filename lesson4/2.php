<!--создайте калькулотор, который будет определять тип выбранной пользователем-->
<!--операции, ориентируясь на нажатую кнопку.-->

<?php
if(isset($_POST['firstValue']) && isset($_POST['secondValue'])) {
    $firstValue = $_POST["firstValue"];
    $secondValue = $_POST["secondValue"];
}

if (isset($_POST['addition'])) {
    $operation = '+';
}
else if (isset($_POST['subtraction'])) {
    $operation = '-';
}
else if (isset($_POST['multiply'])) {
    $operation = '*';
}
else if (isset($_POST['division'])) {
    $operation = '/';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">

    <input type="text" name="firstValue" value="" />
    <input type="text" name="secondValue" value="" /> = <br>
    <input type="submit" value="+" name ="addition"/>
    <input type="submit" value="-" name ="subtraction"/>
    <input type="submit" value="*" name ="multiply"/>
    <input type="submit" value="/" name ="division"/>

</form>

<?php
if ( is_numeric ($firstValue) && is_numeric($secondValue)) {
    switch ($operation) {
        case '+':
            echo $firstValue + $secondValue;
            break;
        case '-':
            echo $firstValue - $secondValue;
            break;
        case '*':
            echo $firstValue * $secondValue;
            break;
        case '/':
            if ($secondValue == 0) {
                echo "введите корректные данные";
                break;
            }
            echo $firstValue / $secondValue;
            break;
    }
}
else  echo "введите корректные данные";
?>
</body>

</html>
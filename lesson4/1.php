<!--создать калькулятор с четырьмя операциями:-->
<!--сложение, вычитание, умножение, деление. Не забудьте обработать деление на-->
<!--ноль!-->
<!--Выбор операции можно осуществлять с помощью тега <select>.-->

<?php
if(isset($_POST['firstValue']) && isset($_POST['secondValue'])) {
    $firstValue = $_POST["firstValue"];
    $secondValue = $_POST["secondValue"];
    $operation = $_POST["operation"];
}
else echo "введите значения в поля";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="<?php echo $PHP_SELF;?>" >
    <input type="text" name="firstValue" value="" />
    <select name = "operation">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="secondValue" value="" />

    <input type="submit" value="=" />
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
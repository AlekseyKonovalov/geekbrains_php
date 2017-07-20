<!--Возвращается сумма вклада по окончанию срока.-->
<!---->
<!--Напишите функцию, которая принимает на вход два-->
<!---->
<!--аргумента – число (1..31) и номер месяца (1..12).-->
<!---->
<!--Возвращает правильно сформированную дату на-->
<!---->
<!--русском языке. Например: «1 января» или «9 мая»-->



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$dayMonth = 4;
$numberMonth = 4;
strDate($dayMonth, $numberMonth);

function strDate($dayMonth, $numberMonth){


    if ($dayMonth > 0 && $dayMonth < 32 && $numberMonth > 0 && $numberMonth < 13 ) {
        echo $dayMonth . " ";
        $monthMap = array(1 => "января", 2 => "февраля", 3 => "марта",
            4 => "апреля", 5 => "мая", 6 => "июня",
            7 => "июля", 8 => "августа", 9 => "сентября",
            10 => "октября", 11 => "ноября", 12 => "декабря");
        echo $monthMap[$numberMonth];
    }
    else echo "Введите корректные данные";
}
?>


</body>

</html>


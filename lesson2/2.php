<!--Напишите функцию, которая вычисляет доход по-->
<!---->
<!--вкладу. В качестве аргумента принимается сумма-->
<!---->
<!--вклада, срок в месяцах, годовой процент.-->
<!---->



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
$deposit = 10000;
$percent = 10;
$period = 24;

calc($deposit, $percent, $period);

function calc ($deposit, $percent, $period){
    if ($deposit >0 &&  $percent  >0 && $period  >0) {
        // общий порядок расчета
        $totalAmount = $deposit * pow((1 + $percent / 100), $period / 12);
        $profit = $totalAmount - $deposit;
        echo "Profit  :  " . $profit . "<br />";
    }
    else echo "Введите корректные данные";
}

?>


</body>

</html>


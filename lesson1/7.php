<!--7. Дайте ответ на вопрос, как работает оператор xor? В каких случаях он возвращает-->
<!---->
<!--значение true, в каких – false? Для этого напишите скрипт, который выводит значения-->
<!---->
<!--операций со всеми возможными вариантами операндов (4 варианта). Чему равно $a xor-->
<!---->
<!--$a для любых значений $a?-->

<?php
//исключающее ИЛИ (хоr).
echo "1 ";
$a= true;
$b= true;
echo ($a xor $b); //fslse

echo "<br>2  ";
$a= true;
$b= false;
echo ($a xor $b); //true

echo "<br>3  ";
$a= false;
$b= true;
echo ($a xor $b); //true

echo "<br>4  ";
$a= false;
$b= false;
echo ($a xor $b); //false

?>

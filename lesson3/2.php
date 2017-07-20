
<!--2) Напишите фукнцию, которая создает массив из $n случайных чисел и возвращает его в отсортированном по убыванию порядке.-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?
$n = 100;
$arr = treatmentArray($n);
rsort($arr);
for ($i = 0 ; $i < $n ; $i++){
    echo $arr[$i]. "<br>";
}

function treatmentArray($n){

    $arr = array();
    for ($i = 0 ; $i < $n ; $i++){
        $arr[$i]= rand(0,100);
    }
    return $arr;
}

?>
</body>

</html>
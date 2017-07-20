<?php

$image = $_GET['name'];
$pathDir = "./pictures/";

include 'HandlerDB.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<div>
    <?php
    echo  "<img src='" . $pathDir . htmlspecialchars(urlencode($image)) ."' alt='" . $image . " ' />  <br> ";
    echo "Количество просмотров : " . HandlerDB::getVisitsPicture($image);
    HandlerDB::setPlusVisit($image);
    ?>
</div>

<div>

    <a href="index.php">Назад</a>

</div>


</body>

</html>

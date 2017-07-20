<?php
if (isset($_COOKIE['login']) ){
    setcookie("lastpage", 'b.php', time() + 3600);
}
else header('Location: '."login.php");

if (isset($_COOKIE['choiseStyle']) ){
    $choiseStyle = $_COOKIE['choiseStyle'];
    switch ($choiseStyle){
        case 'first':
            $cssUrl = 'css\style1.css';
            break;
        case 'second':
            $cssUrl = 'css\style2.css';
            break;
        case 'third':
            $cssUrl = 'css\style3.css';
            break;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        <? include $cssUrl ?>
    </style>
</head>
<body>

<a href="a.php">page A</a><br>
<a href="b.php">page B</a><br>
<a href="settings.php">settings</a><br>


<div name = 'text' >
это страница Б
</div>

</body>

</html>

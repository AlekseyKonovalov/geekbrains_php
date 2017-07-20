<?php
if (isset($_COOKIE['login']) ){
    setcookie("lastpage", 'settings.php', time() + 3600);
}
else header('Location: '."login.php");

if (isset($_POST['choiseStyle'])){
    setcookie("choiseStyle", $_POST['choiseStyle'], time() + 3600);
    header("Location: settings.php");
}

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

<form method="post" action="<?php echo $PHP_SELF;?>" >
    <p><b>Выберите стиль оформления сайта</b></p>
    <p><input name="choiseStyle" type="radio" value="first"> Первый</p>
    <p><input name="choiseStyle" type="radio" value="second"> Второй</p>
    <p><input name="choiseStyle" type="radio" value="third"> Третий</p>
    <p><input type="submit" value="Выбрать"></p>
</form>

</body>

</html>

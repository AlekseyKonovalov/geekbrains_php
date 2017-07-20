<?php
if(isset($_POST['login']) && isset($_POST['pass'])) {
    $login = $_POST["login"];
    $pass =  $_POST["pass"];

    $loginArr = array( "user1" => "user1",
        "user2" => "user2",
        "user3" => "user3");

    if ($loginArr[$login]){
        setcookie("login", $login, time() + 3600);
        header('Location: '."index.php");
    }
    else echo 'введите корректные логин и пароль';
}

if (isset($_COOKIE['login'])){
    if (isset($_COOKIE['lastpage']) ){
        header('Location: '.$_COOKIE['lastpage']);
    }
    else  header('Location: '."index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="<?php echo $PHP_SELF;?>" >
    Введите логин<br>
    <input type="text" name="login" value="" /><br>
    Введите пароль<br>
    <input type="text" name="pass" value="" /><br>

    <input type="submit" value="Отправить" />
</form>

<?php

?>
</body>

</html>
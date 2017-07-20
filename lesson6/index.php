<?php
// Включаем отображение ошибок
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php include("downloadPictures.php"); ?>

</head>
<body>
<form action=uploadPictures.php method=post enctype=multipart/form-data>
    <input type=file name=uploadfile>
    <input type=submit value=Загрузить>
</form>

<?php echo downloadPictures($_GET["downloadPictures"])?>

</body>

</html>
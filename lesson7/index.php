<?php
include("HandlerPictures.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css\style.css" >
    <meta charset="utf-8">

</head>
<body>
<form method=post enctype=multipart/form-data action=uploadpictures.php>
    <input type=file name="uploadfile">
    <input type=submit name="downloadPictures" value=Загрузить>
</form>

<div>
    <?php
    echo HandlerPictures::treatmentPictures();
    ?>
</div>


</body>

</html>
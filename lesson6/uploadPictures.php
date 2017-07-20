<?php

    $uploaddir = './pictures/';
    $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);
    if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
        echo "<h3>File uploaded successfully</h3>";

        $back = $_SERVER['HTTP_REFERER'];
        echo "
        <html>
        <head>
            <meta http-equiv='Refresh' content='0; URL=" . $_SERVER['HTTP_REFERER'] . "'>
         </head>
        </html>";

    } else {
        echo "<h3>Error! Could not upload file</h3>";
        exit;
    }


?>
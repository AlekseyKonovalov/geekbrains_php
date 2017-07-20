<?php

function downloadPictures(){
        $result = "";
        $fimg = "";
        $pathDir = "./pictures/";
        $images = scandir($pathDir);
        $images = preg_grep("/.(png|bmp|jpg)$/i", $images);
        if (is_array($images)) {
            foreach ($images as $image) {
                $fimg .= "<img src='" . $pathDir . htmlspecialchars(urlencode($image)) . "' alt='" . $image . "' /> <br>";
            }
            $result .= $fimg;
        } else {
            $result .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
        }
        return $result;

}
?>
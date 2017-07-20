<?php

include 'HandlerDB.php';

class HandlerPictures{
    static public function treatmentPictures(){

        $pathDir = "./pictures/";

        if (!HandlerDB::checkTablePictures()){
            HandlerDB::createTablePictures();
        }

        $images = HandlerPictures::scanPictures($pathDir);

        foreach ($images as $image){
            HandlerDB::entryPicturesToDB($image);
        }

        return HandlerPictures::downloadOnViewPictures($images, $pathDir);
    }

    static private function scanPictures($pathDir){

        $images = scandir($pathDir);
        $images = preg_grep("/.(png|bmp|jpg)$/i", $images);
        return $images;
    }

    static private function downloadOnViewPictures($images, $pathDir){
        $fimg='';
        $result='';
        if (is_array($images)) {
            foreach ($images as $image) {

                $fimg .="<a href=\"photo.php?name=" . $image . "\" >";
                $fimg .= "<img src='" . $pathDir . htmlspecialchars(urlencode($image)) ."' alt='" . $image . " ' />  <br> ";
            }
            $result .= $fimg;
        } else {
            $result .= "<div style='text-align:center'>Не обнаружено изображений в директории!</div>\n";
        }

        return $result;

    }
}

?>
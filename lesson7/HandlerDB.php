<?php

class HandlerDB{

    static private function createConnection(){
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $db_name= 'szdvtl';

        $mysqli = new mysqli($server, $username, $password, $db_name);

        if ($mysqli->connect_error) {
            die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
        return $mysqli;
    }

    static public function checkTablePictures(){
        $mysqli = HandlerDB::createConnection();
        if ($mysqli->query("SELECT * FROM photos")){
            mysqli_close($mysqli);
            return true;
        }
        else {
            mysqli_close($mysqli);
            return false;
        }
    }

    static public function createTablePictures(){
        $mysqli = HandlerDB::createConnection();
        $sql = "CREATE TABLE photos (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(30),
            height INT(30),
            widht INT(30))";

        $mysqli->query($sql);

        mysqli_close($mysqli);
    }

    static public function entryPicturesToDB($image){

        $mysqli = HandlerDB:: createConnection();

        $result = $mysqli->query("SELECT * FROM photos WHERE name = '$image'");
        if ( $result->num_rows == 0 ){
            $sql = "INSERT INTO photos (name)
            VALUES ('$image')";
            $mysqli->query($sql);
        };

        mysqli_close($mysqli);
    }

    static public function getVisitsPicture($image){
        $mysqli = HandlerDB:: createConnection();
        $result = $mysqli->query("SELECT visits FROM photos WHERE name = '$image'");
        $result = $result->fetch_row() ;
        mysqli_close($mysqli);
        return $result[0];

    }

    static public function setPlusVisit($image){
        $mysqli = HandlerDB::createConnection();
        $result = $mysqli->query("SELECT visits FROM photos WHERE name = '$image'");
        $result = $result->fetch_row() ;
        $result[0] = $result[0]+1;
        $mysqli->query("UPDATE photos SET visits='$result[0]' WHERE name = '$image'");
        mysqli_close($mysqli);

    }

}



?>
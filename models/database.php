<?php
// la 
class Database {
// static pck on a pa besoin  d'instencier la classe dans laquelle elle est implementer(creer)cad pas besoin de new db...
     public static function dbConnect(){
        $conn = null;
        try {
            $conn = new PDO ("mysql:host=localhost;dbname=wf3_php_fin_alin", "root", "");
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }

        return $conn;
     }


}
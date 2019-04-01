<?php
class Database{
    public static function connect(){
//        $db = mysqli_connect('localhost','xxx','xxx','xx');
        $db = mysqli_connect('localhost','xxx','xxx','xxx');
        $db ->query("SET NAMES 'utf-8'");
        return $db;
    }
}
?>

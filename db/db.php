<?php
class Database{
    public static function connect(){
//        $db = mysqli_connect('localhost','id8523223_controlador','Developer-19..','id8523223_own');
        $db = mysqli_connect('localhost','id8523223_controlador','Developer-19','id8523223_own');
        $db ->query("SET NAMES 'utf-8'");
        return $db;
    }
}
?>
<?php
namespace app\database;

use PDO;

class Connection
{
    private static $connection = null;

    public static function connect()
    {
        if(!self::$connection) {
<<<<<<< HEAD
            self::$connection = new PDO("mysql:host=localhost;dbname=lumen", "root", "",[
=======
            self::$connection = new PDO("mysql:host=localhost;dbname=lumen", "root", "123456",[
>>>>>>> 746806409326c0bd5c23053e511d20c02aac710d
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);            
        }        

        return self::$connection;
    }
}
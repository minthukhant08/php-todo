<?php 
class DB {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "password";
    private static $database = "todo";
    private static $connection;

    public static function getConnection(){
        if (!self::$connection){
            try{
                self::$connection = new PDO('mysql:host='. self::$servername .';dbname='. self::$database, self::$username, self::$password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e){
                die("DB connection error :" . $e->getMessage());
            }
        }
        return self::$connection;
    }
}

?>
<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "mathieum_guider";
    private static $dbUser = "mathieum_guider";
    private static $dbUserpassword = "qSld+Sixy8lx";
    
    private static $connection = null;
    
    public static function connect()
    {
        try{
                 //echo "try connexion\n";
                self::$connection = new PDO("mysql:host=" . self::$dbHost . ";charset=UTF8;dbname=" . self::$dbName, self::$dbUser,self::$dbUserpassword);
               
    
            }
            catch (PDOException $e)
            {
    
                die($e->getMessage()); 
                    
            }
            return self::$connection;
     }
     
     public static function disconnect(){
        self::$connection = null;
     
     }
    
}

//Database::connect();


?>

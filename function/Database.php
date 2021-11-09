<?php
class Database{

    private static $instance = null;
    public function __construct(){ }

    public static function getInstance(){
        if (self::$instance == null){
            $server = 'localhost';
            $username = 'root';
            $pass = '';
            $db = 'db_himakom';
            try{
                self::$instance = new PDO("mysql:host=$server;dbname=$db", $username,$pass);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }    
}

?>
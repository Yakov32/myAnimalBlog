<?php
    class DB{
         static $instance;
         const DB_HOST = 'localhost';
         const DB_NAME = 'animalblog';
         const DB_LOG  = 'root';
         const DB_PASS = '';
        

        public static function connectToDB(){
            $host = self::DB_HOST;
            $database = self::DB_NAME;
            $db_log = self::DB_LOG;
            $db_pass = self::DB_PASS;
            
            try{
                $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$database",
                    $db_log,
                    $db_pass,
                    $opt);

                return self::$instance;    
            } 
            catch(PDOException $e){
                die ("Error ---> $e");
            }
        }
    }
 
?>
  
<?php
try {
    $conn = new  PDO("mysql:dbname=de_volta;host=localhost", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

class Conexao
{

    public static $instace;
    public static function get_instace()
    {

        if (!isset(self::$instace)) {
            self::$instace = new PDO("mysql:dbname=de_volta;host=localhost", "root", "");
        }
        return self::$instace;
    }
}


// try {
//     $conn = new  PDO("mysql:dbname=u119780054_volta_php;host=localhost","u119780054_root","Isael99322065");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'ERROR: ' . $e->getMessage();
// }


// class Conexao{
    
//     public static $instace ;
//     public static function get_instace(){

//         if(!isset(self::$instace)){
//             self::$instace = new PDO("mysql:dbname=u119780054_volta_php;host=localhost","u119780054_root","Isael99322065");
//     }
//         return self::$instace;        
//     }
// }
  

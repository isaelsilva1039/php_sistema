<?php

class Conexao{
    
    public static $instace ;
    public static function get_instace(){

        if(!isset(self::$instace)){
            self::$instace = new PDO("mysql:dbname=de_volta;host=localhost","root","");
    }
        return self::$instace;        
    }
}
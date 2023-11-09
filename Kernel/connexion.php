<?php

namespace kernel;

use PDO;
use Config\DB;
use PDOException;

class Connexion{

    private static $pdo;

    private function __construct()
    {
        return ;
    }

    public static function get(){
        if(!isset(self::$pdo))
        {
            try {
                //creation de l'objet
                self::$pdo = new PDO('mysql:host='.DB::HOST.';dbname'.DB::NAME, DB::USERNAME , DB::PASSWORD);

                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                //throw $th;
                echo "erreur de connexion". $e->getMessage();
            }
        }
        return self::$pdo;
    }
}
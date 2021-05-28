<?php

namespace Core;

use PDO;


abstract class Model
{

    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $host = 'localhost';
            $dbname = 'MyPizzas';
            $username = 'john';
            $password = 'test123';

            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                              $username, $password);

                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $db;
    }
}

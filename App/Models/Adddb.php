<?php

namespace App\Models;

use PDO;


class Adddb extends \Core\Model
{


    public static function setAll($email,$title,$ingredients)
    {

        try {

            $db = static::getDB();
           $sql = "INSERT INTO pizzas(email,title,ingredients) VALUES('$email', '$title', '$ingredients')";



            if($db->exec($sql)){
                return true;
            }
            else {
                return false;
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

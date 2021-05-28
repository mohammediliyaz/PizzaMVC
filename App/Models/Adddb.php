<?php

namespace App\Models;

use PDO;

/**
 * Post model
 *
 * PHP version 5.4
 */
class Adddb extends \Core\Model
{

    /**
     * Get all the posts as an associative array
     *
     * @return array
     */
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

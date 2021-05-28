<?php

namespace App\Models;

use PDO;


class Detailsdb extends \Core\Model
{


    public static function getAll($id)
    {

        try {

            $db = static::getDB();

           $stmt = $db->query("SELECT * FROM pizzas WHERE id = $id");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function setAll($id_to_delete)
    {

        try {


            $db = static::getDB();

            $query = $db->prepare("DELETE FROM pizzas WHERE id = :name LIMIT 1;");

           if($query->execute([':name' => $id_to_delete])){
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

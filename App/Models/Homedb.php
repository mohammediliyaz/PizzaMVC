<?php

namespace App\Models;

use PDO;


class Homedb extends \Core\Model
{


    public static function getAll()
    {

        try {

            $db = static::getDB();

            $stmt = $db->query('SELECT title, ingredients, id FROM pizzas ORDER BY created_at');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

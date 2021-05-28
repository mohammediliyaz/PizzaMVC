<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Homedb;

/**
 * Home controller
 *
 * PHP version 5.4
 */
class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    // protected function before()
    // {
    //     echo "(before) ";
    //     //return false;
    // }

    /**
     * After filter
     *
     * @return void
     */
    // protected function after()
    // {
    //     echo " (after)";
    // }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $pizzas = Homedb::getAll();

        // View::render("Home/index.php",['title' => "one",'ingredients'=>["asdf","asdf","asdf"],'id'=>4]);
        View::render("Home/index.php",[$pizzas]);

    }
}

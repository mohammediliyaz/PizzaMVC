<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Homedb;


class Home extends \Core\Controller
{

protected function before()
    {


    }
protected function after()
    {

    }
    public function indexAction()
    {
        $pizzas = Homedb::getAll();

        // View::render("Home/index.php",['title' => "one",'ingredients'=>["asdf","asdf","asdf"],'id'=>4]);
        View::render("Home/index.php",[$pizzas]);

    }
}

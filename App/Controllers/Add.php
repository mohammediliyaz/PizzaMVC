<?php

namespace App\Controllers;

use \Core\View;

class Add extends \Core\Controller
{

    protected function before()
    {


    }
protected function after()
    {

    }
    public function indexAction()
    {

        View::render("Add/index.php");
    }



}

<?php

namespace App\Controllers;

use \Core\View;


class Details extends \Core\Controller
{
    protected function before()
    {


    }
protected function after()
    {

    }

    public function indexAction()
    {
        View::render("Details/index.php");

    }




}

<?php

namespace App\Controllers;

use \Core\View;


class Details extends \Core\Controller
{


    public function indexAction()
    {
        View::render("Details/index.php");

    }




}

<?php

namespace App\Controllers;
use App\Models\Detailsdb;
use \Core\View;


class Details extends \Core\Controller
{
    protected function before()
    {


    }
protected function after()
    {

    }

    public function indexAction($id = 0)
    {
        $result = Detailsdb::getAll($id);
        View::render("Details/index.php");

    }




}

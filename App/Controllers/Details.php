<?php

namespace App\Controllers;
use App\Models\Detailsdb;
use \Core\View;
use App\Models\Adddb;

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
    public static function setdata($email,$title,$ingredients){
        if(Adddb::setAll($email,$title,$ingredients)){
            return true;
        }
        else {
            return false;
        }
    }



}

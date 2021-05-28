<?php

namespace App\Controllers;

use \Core\View;

class Add extends \Core\Controller
{


    public function indexAction()
    {

        View::render("Add/index.php");
    }


    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Add controller!';
    }


    public function editAction()
    {
        echo 'Hello from the edit action in the Add controller!';
        echo '<p>Route parameters: <pre>' .
             htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}

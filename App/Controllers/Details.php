<?php

namespace App\Controllers;

use \Core\View;

/**
 * Add controller
 *
 * PHP version 5.4
 */
class Details extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::render("Details/index.php");

    }

    /**
     * Show the Details new page
     *
     * @return void
     */
    // public function deleteAction()
    // {   echo "detele method is active";
    //     echo 'Hello from the addNew action in the Details controller!';
    // }

    /**
     * Show the edit page
     *
     * @return void
     */
    // public function editAction()
    // {
    //     echo 'Hello from the edit action in the Details controller!';
    //     echo '<p>Route parameters: <pre>' .
    //          htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    // }
}

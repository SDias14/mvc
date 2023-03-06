<?php
namespace src\controllers;

use \core\Controller;


class UserController extends Controller {

    public function add() {
        $this->render('add'); //renderiza a view add.php
    }

}

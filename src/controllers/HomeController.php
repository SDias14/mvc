<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuarios;

class HomeController extends Controller {

    //método index . quando acessar o site vai chamar o método index
    public function index() {

        $usuarios = Usuarios::select()->execute();


        $this->render('home', [
            'usuarios' => $usuarios
        ]);
       
    }



    

}



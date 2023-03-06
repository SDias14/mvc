<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Test;

class HomeController extends Controller {

    //método index . quando acessar o site vai chamar o método index
    public function index() {

//mandando um array de informações para a view
        $posts = [
            ['title' => 'Titulo 1', 'body' => 'Corpo 1'],
            ['title' => 'Titulo 2', 'body' => 'Corpo 2'],
            ['title' => 'Titulo 3', 'body' => 'Corpo 3'],
            ['title' => 'Titulo 4', 'body' => 'Corpo 4'],
            ['title' => 'Titulo 5', 'body' => 'Corpo 5'],
        ]; //vindo do banco de dados e precisa renderizar na view



       $nome = 'Samuel';
       
        $this->render('home' , [
            'nome' => $nome, //essas chaves se tornam variaveis na view.
            'idade' => 26,
            'posts' => $posts


        ]);
       
    }

    public function fotos() {
      $this->render('fotos'); //chama o método render da classe Controller para renderizar a view
    }

    public function foto($args) {
        echo "Acsessando a foto: {$args['id']}";
        print_r($args);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function add() {
        echo "Adicionar novo usuário";
    }

}
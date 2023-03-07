<?php
namespace src\controllers;

use \core\Controller;

use src\models\Usuarios;


class UserController extends Controller {

    public function add() {
        $this->render('add'); //renderiza a view add.php
    }

    public function addAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        
        if($name && $email) {

            $data = Usuarios::select()->where('email', $email)->execute();

            if(count($data) === 0) {
                Usuarios::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();
                $this->redirect('/');
                
            } 
           
        } 

        $this->redirect('/novo');
    }

    public function edit($args) {
        $usuario = Usuarios::select()->find($args['id']);
        
        $this->render('edit', [
            'usuario' => $usuario
        ]);
    }


    public function editAction($args) {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        
        if($name && $email) {

            Usuarios::update()
            ->set('nome', $name)
            ->set('email', $email)
            ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        } 

        $this->redirect('/usuario/'.$args['id'].'/editar');
    }   

    


}



?>

    

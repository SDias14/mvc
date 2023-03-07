<?php
use core\Router;

$router = new Router();//instancia a classe Router

/**
 * Rota para o controller HomeController
 * get = método de requisição
 * primeiro parametro : a rota
 * segundo parametro : o controller e a action
 */
$router->get('/', 'HomeController@index'); //quando a pessoa acessar o site vai chamar o método index. é a rota de leitura de dados

$router->get('/novo', 'UserController@add'); //quando a pessoa acessar o site vai chamar o método sobre

$router->post('/novo', 'UserController@addAction'); //no mvc nao mandamos a informação pela pagina , mas sim pela url. Aqui criamos uma rota para o metodo addAction. Quando o usuario clicar no botao de adicionar, ele vai chamar o metodo addAction

$router->get('/usuario/{id}/editar', 'UserController@edit'); // rota para o metodo edit no controller UserController. pagina da view para editar o usuario

$router->post('/usuario/{id}/editar', 'UserController@editAction'); // rota para o metodo editAction no controller UserController. modificar o usuario e mandar para o banco de dados. 

$router->get('/usuario/{id}/excluir', 'UserController@del'); // rota para o metodo del no controller UserController










/* old code

//criando uma rota nova do zero. 

$router->get('/fotos', 'HomeController@fotos'); //quando a pessoa acessar o site vai chamar o metodo fotos. todas as fotos

//criando uma rota dinamica

$router->get('/foto/{id}', 'HomeController@foto'); //quando a pessoa acessar o site vai chamar o metodo foto. uma foto






$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

//criando uma rota nova do zero. 


*/
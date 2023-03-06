<?php
use core\Router;

$router = new Router();//instancia a classe Router

/**
 * Rota para o controller HomeController
 * get = método de requisição
 * primeiro parametro : a rota
 * segundo parametro : o controller e a action
 */
$router->get('/', 'HomeController@index'); //quando a pessoa acessar o site vai chamar o método index
$router->get('/novo', 'UserController@add'); //quando a pessoa acessar o site vai chamar o método sobre










/* old code

//criando uma rota nova do zero. 

$router->get('/fotos', 'HomeController@fotos'); //quando a pessoa acessar o site vai chamar o metodo fotos. todas as fotos

//criando uma rota dinamica

$router->get('/foto/{id}', 'HomeController@foto'); //quando a pessoa acessar o site vai chamar o metodo foto. uma foto






$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

//criando uma rota nova do zero. 


*/
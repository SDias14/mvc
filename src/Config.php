<?php
namespace src;

class Config {
    const BASE_DIR = '/mvc/public/'; //esta constante é usada para definir o caminho base da aplicação

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'celke';
    CONST DB_USER = 'root';
    const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}
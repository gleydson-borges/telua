<?php
require 'environment.php';

global $config;
$config = array();

if(ENVIRONMENT == 'development'){
    define('BASE_URL','');
    $config['dbname'] = 'kodan096_default';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass']='';
}
else{
    define('BASE_URL','http://telua.com.br');
    $config['dbname'] = 'kodan096_cadastro';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'kodan096_kodando';
    $config['dbpass']='Kodando@0102';
}


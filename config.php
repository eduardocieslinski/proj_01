<?php
    session_start();
    $autoload = function($class){
        if($class == 'Email'){
        require_once('classes/phpmailes/PHPMailerAutoLoad.php');
    }
    include('classes/'.$class.'.php');
};

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/Curso/Projeto_pratico_01/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    //conectar com banco de dados 
    define('HOST', 'localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');
?>
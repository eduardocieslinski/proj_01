<?php
    session_start();
    $autoload = function($class){
        if($class == 'Email'){
        require_once('classes/phpmailes/PHPMailerAutoLoad.php');
    }
    include('classes/'.$class.'.php');
};

    spl_autoload_register($autoload);

define('INLCUDE_PATH','http://localhost/Projeto_pratico_01' )
?>
<?php

    function cookie($nome){
        if(isset($_COOKIE[$nome])){
            setcookie($nome, '', time()-1000000000, '/');
            unset($_COOKIE[$nome]);
        }
    }

    cookie('nome');
    cookie('sobre');
    cookie('ra');
    cookie('sala');
    cookie('em');
    if(file_exists('../img/FotoUsuario.jpg')){
        unlink('../img/FotoUsuario.jpg');
    }
    header('location: ../');
    

?>

<?php

    function cookie($nome){
        if(isset($_COOKIE[$nome])){
            print_r($_COOKIE[$nome]);
            echo "<br>";
            setcookie($nome, '', -1000000000);
            print_r($_COOKIE[$nome]);
            echo "<br>";
        }
    }

    cookie('nome');
    cookie('sobre');
    cookie('ra');
    cookie('sala');
    cookie('em');
    //var_dump($_COOKIE);
    //header('location: ../');

?>

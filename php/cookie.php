<?php

function cookie($nome, $content, $id){
    if(!isset($_POST[$id])){
        echo "<script>window.alert('Ocorreu um erro'); window.locate.replace('../');</script>";
    }else{
        setcookie($nome, $content, time()+60*60*24*30, '/');
    }
}
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
cookie('nome', $_POST['nome'], 'nome');
cookie('sobre', $_POST['sob'], 'sob');
cookie('ra', $_POST['ra'], 'ra');
cookie('sala', $_POST['class'], 'class');
cookie('em', $_POST['email'], 'email');

header('location: teste.php');

?>
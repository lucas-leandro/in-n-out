<?php
loadModel('Login');
$excepetion = null;

if(count($_POST)){
    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        echo "Usuario: {$user->name} logado";
    } catch(AppException $e){
        $excepetion = $e;
    }
}
loadView('login', $_POST + ['exception' => $excepetion]);
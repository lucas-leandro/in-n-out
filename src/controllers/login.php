<?php
loadModel('Login');
session_start();

$exception = null;

if(count($_POST)){
    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        $_SESSION['user'] = $user;
        header("location: day_records.php");
    } catch(AppException $e){
        $exception = $e;
    }
}
loadView('login', $_POST + ['exception' => $exception] );
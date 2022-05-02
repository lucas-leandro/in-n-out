<?php
session_start();
requireValidSession(); 


$users = User::get();

foreach($users as $user){
    
}

loeadTemplateView('users', ['users' => $users]);
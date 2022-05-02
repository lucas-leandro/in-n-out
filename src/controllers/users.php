<?php
session_start();
requireValidSession(); 


$users = User::get();

loadTemplateView('users', ['users' => $users]);
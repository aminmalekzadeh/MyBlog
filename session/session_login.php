<?php
require_once '../functions.php';
include_once '../section/head.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (doLogin($username,$password)) {
            header('Location: ../Panel/index.php');
            die;
        }else{
        e("رمزعبور یا نام کاربری اشتباه است","alert-danger");
    }

}

require 'Login.view.php';

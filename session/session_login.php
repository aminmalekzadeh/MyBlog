<?php
require_once '../functions.php';
include_once '../section/head.php';
require 'isset_session.php';
$issession = new isset_session();
$issession->IsSession();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (doLogin($username,$password)) {
            header('Location: ../Panel/index.php');
            die;
        }else{
        e("شما با خطا مواجه شدید.","alert-danger");
    }

}

require 'Login.view.php';

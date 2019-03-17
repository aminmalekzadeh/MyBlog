<?php

session_start();

session_destroy();

header('Location: session/Login.view.php');
die;

?>

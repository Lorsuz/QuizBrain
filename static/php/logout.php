<?php
    session_start();
    session_destroy();

    header('location: login-front.php');
    exit();
?>
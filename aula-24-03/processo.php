<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'etecmcm' && $password == '141'){
        header('Location: ./dashboard.php');
        die();
    } else {
        header('Location: ./');
        die();
    }
?>
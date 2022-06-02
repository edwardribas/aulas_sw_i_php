<?php
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $user = "ribas"; 
    $pass = "1234";

    if ($username === $user && $password === $pass) {
        session_start();

        // session variable 
        $_SESSION['valueUsername'] = $username; 
        $_SESSION['booleanLogged'] = 1;
        
        header('Location: ./restrict.php');
    } else {
        $_SESSION['booleanLogged'] = 0;
        header('Location: ../.');
    }
?>
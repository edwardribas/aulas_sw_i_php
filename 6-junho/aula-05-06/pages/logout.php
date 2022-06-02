<?php
    session_start();

    if (isset($_SESSION) || $_SESSION['booleanLogged'] === 1) {
        unset($_SESSION);
        session_destroy();
        header("Location: ../.");
    }
?>
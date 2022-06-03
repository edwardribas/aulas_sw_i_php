<?php
    session_start();

    if (isset($_SESSION) || $_SESSION['booleanLogged'] === 1) {
        session_unset($_SESSION);
        session_destroy();
        header("Location: ../.");
    }
?>

<?php # exit.php

session_start();

if (isset($_SESSION['user'])) {
    # code...
    session_destroy();
    $_SESSION = array();
    header('Location: login.php');

} else {
    # Redirect to home page if user is logged in
    header("Location: actividad.php");
}

?>
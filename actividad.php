<?php #actividad.php

session_start();

if (isset($_SESSION['user'])) {
    # Redirect to home page if user is logged in
    header("Location: login.php");
} else {
    # code...
    header('Location: ./app/views/actividad.view.php');
}

?>
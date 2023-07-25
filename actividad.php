<?php #actividad.php

session_start();

if (!isset($_SESSION['user'])) {
    # Redirect to home page if user is logged in
    header("Location: index.php");
} else {
    # code...
    header('Location: ./app/views/actividad.php');
}


?>